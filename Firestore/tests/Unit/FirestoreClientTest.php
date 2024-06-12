<?php
/**
 * Copyright 2017 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Firestore\Tests\Unit;

use Google\Cloud\Core\Blob;
use Google\Cloud\Core\Exception\AbortedException;
use Google\Cloud\Core\GeoPoint;
use Google\Cloud\Core\Iterator\ItemIterator;
use Google\Cloud\Core\RequestHandler;
use Google\Cloud\Core\Testing\FirestoreTestHelperTrait;
use Google\Cloud\Core\Testing\GrpcTestTrait;
use Google\Cloud\Core\Testing\TestHelpers;
use Google\Cloud\Firestore\CollectionReference;
use Google\Cloud\Firestore\Connection\ConnectionInterface;
use Google\Cloud\Firestore\DocumentReference;
use Google\Cloud\Firestore\FieldPath;
use Google\Cloud\Firestore\FirestoreClient;
use Google\Cloud\Firestore\FirestoreSessionHandler;
use Google\Cloud\Firestore\Query;
use Google\Cloud\Firestore\V1\BeginTransactionRequest;
use Google\Cloud\Firestore\V1\Client\FirestoreClient as V1FirestoreClient;
use Google\Cloud\Firestore\V1\CommitRequest;
use Google\Cloud\Firestore\V1\FirestoreClient as V1FirestoreGapicClient;
use Google\Cloud\Firestore\V1\ListCollectionIdsRequest;
use Google\Cloud\Firestore\V1\RollbackRequest;
use Google\Cloud\Firestore\V1\RunAggregationQueryRequest;
use Google\Cloud\Firestore\V1\RunQueryRequest;
use Google\Cloud\Firestore\WriteBatch;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Prophecy\PhpUnit\ProphecyTrait;

/**
 * @group firestore
 * @group firestore-client
 */
class FirestoreClientTest extends TestCase
{
    use FirestoreTestHelperTrait;
    use GrpcTestTrait;
    use ProphecyTrait;

    const PROJECT = 'example_project';
    const DATABASE = '(default)';

    private $connection;
    private $requestHandler;
    private $serializer;
    private $client;

    public function setUp(): void
    {
        $this->checkAndSkipGrpcTests();

        $this->connection = $this->prophesize(ConnectionInterface::class);
        $this->requestHandler = $this->prophesize(RequestHandler::class);
        $this->serializer = $this->getSerializer();
        $this->client = TestHelpers::stub(
            FirestoreClient::class,
            [['projectId' => self::PROJECT]],
            ['requestHandler', 'connection']
        );
    }

    public function testBatch()
    {
        $batch = $this->client->batch();
        $this->assertInstanceOf(WriteBatch::class, $batch);
    }

    public function testBatchCorrectDatabaseName()
    {
        $db = sprintf('projects/%s/databases/%s', self::PROJECT, self::DATABASE);
        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'commit',
            Argument::that(function ($req) use ($db) {
                return $req->getDatabase() == $db;
            }),
            Argument::cetera()
        )
            ->shouldBeCalled()
            ->willReturn([[]]);

        $this->client->___setProperty('requestHandler', $this->requestHandler->reveal());
        $batch = $this->client->batch();
        $batch->commit();
    }

    public function testCollection()
    {
        $collection = $this->client->collection('collectionName');

        $this->assertInstanceOf(CollectionReference::class, $collection);
        $this->assertEquals('collectionName', $collection->id());
    }

    public function testCollections()
    {
        $collectionIds = [
            'collection-a',
            'collection-b',
            'collection-c',
        ];

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'listCollectionIds',
            Argument::type(ListCollectionIdsRequest::class),
            Argument::cetera()
        )->shouldBeCalledTimes(1)->willReturn([
            'collectionIds' => $collectionIds
        ]);

        $this->client->___setProperty('requestHandler', $this->requestHandler->reveal());

        $collections = $this->client->collections([]);

        $this->assertInstanceOf(ItemIterator::class, $collections);

        $arr = iterator_to_array($collections);
        $this->assertInstanceOf(CollectionReference::class, $arr[0]);
        $this->assertEquals($arr[0]->id(), $collectionIds[0]);
        $this->assertEquals($arr[1]->id(), $collectionIds[1]);
        $this->assertEquals($arr[2]->id(), $collectionIds[2]);
    }

    public function testCollectionsPaged()
    {
        $collectionIds = [
            'collection-a',
            'collection-b',
            'collection-c',
        ];

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'listCollectionIds',
            Argument::that(function ($req) {
                return empty($req->getPageToken()) || $req->getPageToken() == 'foo';
            }),
            Argument::cetera()
        )->willReturn([
            'collectionIds' => $collectionIds,
            'nextPageToken' => 'foo'
        ])->shouldBeCalledTimes(2);

        $this->client->___setProperty('requestHandler', $this->requestHandler->reveal());

        $collections = $this->client->collections([]);

        // enumerate the iterator and kill after it loops twice.
        $arr = [];
        $i = 0;
        foreach ($collections as $collection) {
            $i++;
            $arr[] = $collection;
            if ($i == 6) {
                break;
            }
        }

        $this->assertCount(6, $arr);
    }

    public function testDocument()
    {
        $document = $this->client->document('a/b');

        $this->assertInstanceOf(DocumentReference::class, $document);
        $this->assertEquals('b', $document->id());
    }

    public function testDocumentPathSpecialChars()
    {
        $id = 'a!@#$%^&*(){[{}]+=-_|';
        $document = $this->client->document('a/' . $id);

        $this->assertInstanceOf(DocumentReference::class, $document);
        $this->assertEquals($id, $document->id());
    }

    /**
     * @dataProvider paths
     */
    public function testInvalidPath($method, $name)
    {
        $this->expectException(InvalidArgumentException::class);

        call_user_func([$this->client, $method], $name);
    }

    public function paths()
    {
        return [
            ['collection', 'a/b'],
            ['collection', 'a/b/c/d'],
            ['document', 'a'],
            ['document', 'a/b/c']
        ];
    }

    /**
     * @dataProvider documents
     */
    public function testDocuments(array $input, array $names)
    {
        $ts = ['seconds' => 100, 'nanos' => 100];
        $res = [
            [
                'found' => [
                    'name' => $names[0],
                    'fields' => [
                        'hello' => [
                            'stringValue' => 'world'
                        ]
                    ]
                ],
                'readTime' => $ts
            ], [
                'missing' => $names[1],
                'readTime' => $ts
            ], [
                'missing' => $names[2],
                'readTime' => $ts
            ]
        ];

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'batchGetDocuments',
            Argument::that(function ($req) use ($names) {
                $data = $this->getSerializer()->encodeMessage($req);
                return $data['documents'] == $names;
            }),
            Argument::cetera()
        )->shouldBeCalled()->willReturn($res);


        $this->client->___setProperty('requestHandler', $this->requestHandler->reveal());

        $res = $this->client->documents($input);

        $this->assertEquals('world', $res[0]['hello']);
    }

    public function testDocumentsInvalidInputType()
    {
        $this->expectException(InvalidArgumentException::class);

        $this->client->documents([
            10
        ]);
    }

    public function documents()
    {
        $b = $this->prophesize(DocumentReference::class);
        $b->name()->willReturn('a/b');

        $c = $this->prophesize(DocumentReference::class);
        $c->name()->willReturn('a/c');

        $d = $this->prophesize(DocumentReference::class);
        $d->name()->willReturn('a/d');
        return [
            [
                [
                    'a/b',
                    'a/c',
                    'a/d'
                ], [
                    'projects/'. self::PROJECT .'/databases/'. self::DATABASE .'/documents/a/b',
                    'projects/'. self::PROJECT .'/databases/'. self::DATABASE .'/documents/a/c',
                    'projects/'. self::PROJECT .'/databases/'. self::DATABASE .'/documents/a/d'
                ]
                ], [
                    [
                        'projects/'. self::PROJECT .'/databases/'. self::DATABASE .'/documents/a/b',
                        'projects/'. self::PROJECT .'/databases/'. self::DATABASE .'/documents/a/c',
                        'projects/'. self::PROJECT .'/databases/'. self::DATABASE .'/documents/a/d'
                    ], [
                        'projects/'. self::PROJECT .'/databases/'. self::DATABASE .'/documents/a/b',
                        'projects/'. self::PROJECT .'/databases/'. self::DATABASE .'/documents/a/c',
                        'projects/'. self::PROJECT .'/databases/'. self::DATABASE .'/documents/a/d'
                    ]
                ], [
                    [
                        $b->reveal(),
                        $c->reveal(),
                        $d->reveal()
                    ], [
                        'projects/'. self::PROJECT .'/databases/'. self::DATABASE .'/documents/a/b',
                        'projects/'. self::PROJECT .'/databases/'. self::DATABASE .'/documents/a/c',
                        'projects/'. self::PROJECT .'/databases/'. self::DATABASE .'/documents/a/d'
                    ]
                ]
        ];
    }

    public function testDocumentsOrdered()
    {
        $tpl = 'projects/'. self::PROJECT .'/databases/'. self::DATABASE .'/documents/a/%s';
        $names = [
            sprintf($tpl, 'a'),
            sprintf($tpl, 'b'),
            sprintf($tpl, 'c'),
        ];

        $ts = ['seconds' => 100, 'nanos' => 100];
        $res = [
            [
                'missing' => $names[2],
                'readTime' => $ts
            ], [
                'missing' => $names[1],
                'readTime' => $ts
            ], [
                'missing' => $names[0],
                'readTime' => $ts
            ]
        ];

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'batchGetDocuments',
            Argument::that(function ($req) use ($names) {
                $data = $this->getSerializer()->encodeMessage($req);
                return $data['documents'] == $names;
            }),
            Argument::cetera()
        )->shouldBeCalled()->willReturn($res);


        $this->client->___setProperty('requestHandler', $this->requestHandler->reveal());

        $res = $this->client->documents($names);
        $this->assertEquals($names[0], $res[0]->name());
        $this->assertEquals($names[1], $res[1]->name());
        $this->assertEquals($names[2], $res[2]->name());
    }

    public function testCollectionGroup()
    {
        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'runQuery',
            Argument::that(function ($req) {
                $data = $this->getSerializer()->encodeMessage($req);
                return $data['structuredQuery']['from'] == [
                        [
                            'collectionId' => 'foo',
                            'allDescendants' => true
                        ]
                    ] && $data['parent'] == sprintf(
                        'projects/%s/databases/%s/documents',
                        self::PROJECT,
                        self::DATABASE
                    );
            }),
            Argument::cetera()
        )->shouldBeCalled()->willReturn(new \ArrayIterator([
            [
                'document' => [
                    'name' => 'a/b/c/d',
                    'fields' => []
                ],
                'readTime' => null
            ], [
                'document' => [
                    'name' => 'c/d',
                    'fields' => []
                ],
                'readTime' => null
            ]
        ]));

        $this->client->___setProperty('requestHandler', $this->requestHandler->reveal());
        $query = $this->client->collectionGroup('foo');

        $this->assertInstanceOf(Query::class, $query);
        $query->documents();
    }

    public function testCollectionGroupInvalidId()
    {
        $this->expectException(InvalidArgumentException::class);

        $this->client->collectionGroup('foo/bar');
    }

    public function testRunTransaction()
    {
        $transactionId = 'foobar';

        $databaseName =  V1FirestoreGapicClient::databaseRootName(self::PROJECT, self::DATABASE);
        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'beginTransaction',
            Argument::that(function ($request) use ($databaseName) {
                return $request->getDatabase() == $databaseName;
            }),
            Argument::cetera()
        )->shouldBeCalled()->willReturn([
            'transaction' => $transactionId
        ]);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'rollback',
            Argument::that(function ($request) use ($databaseName, $transactionId) {
                return $request->getDatabase() == $databaseName
                    && $request->getTransaction() == $transactionId;
            }),
            Argument::cetera()
        )->shouldBeCalled();

        $this->client->___setProperty('connection', $this->connection->reveal());
        $this->client->___setProperty('requestHandler', $this->requestHandler->reveal());

        $this->client->runTransaction($this->noop());
    }

    public function testRunTransactionRetryable()
    {
        $transactionId = 'foobar';
        $transactionId2 = 'barfoo';
        $timestamp = ['seconds' => 100, 'nanos' => 100];

        $databaseName =  V1FirestoreGapicClient::databaseRootName(self::PROJECT, self::DATABASE);
        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'beginTransaction',
            Argument::that(function ($request) use ($databaseName) {
                return $request->getDatabase() == $databaseName
                    && !$request->hasOptions();
            }),
            Argument::cetera()
        )->shouldBeCalledOnce()->will(function ($args, $mock) use ($transactionId, $transactionId2) {
            $mock->sendRequest(
                V1FirestoreClient::class,
                'beginTransaction',
                Argument::that(function ($req) use ($transactionId) {
                    return $req->getOptions()->getReadWrite()->getRetryTransaction() == $transactionId;
                }),
                Argument::cetera()
            )->willReturn(['transaction' => $transactionId2]);

            return [
                'transaction' => $transactionId
            ];
        });

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'commit',
            Argument::that(function ($req) use ($transactionId) {
                $db = sprintf('projects/%s/databases/%s', self::PROJECT, self::DATABASE);
                return $req->getDatabase() == $db
                    && $req->getTransaction() == $transactionId;
            }),
            Argument::cetera()
        )->shouldBeCalled()->will(function ($_, $mock) use ($timestamp, $transactionId2) {
            $mock->sendRequest(
                V1FirestoreClient::class,
                'commit',
                Argument::that(function ($req2) use ($transactionId2) {
                    $db = sprintf('projects/%s/databases/%s', self::PROJECT, self::DATABASE);
                    return $req2->getDatabase() == $db
                        && $req2->getTransaction() == $transactionId2;
                }),
                Argument::cetera()
            )->willReturn([
                'commitTime' => $timestamp,
            ]);

            throw new AbortedException('');
        });

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'rollback',
            Argument::that(function ($request) use ($databaseName, $transactionId) {
                return $request->getDatabase() == $databaseName
                    && $request->getTransaction() == $transactionId;
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1);

        $this->client->___setProperty('connection', $this->connection->reveal());
        $this->client->___setProperty('requestHandler', $this->requestHandler->reveal());

        $res = $this->client->runTransaction(function ($t) {
            $doc = $this->prophesize(DocumentReference::class);
            $doc->name()->willReturn('foo');
            $t->create($doc->reveal(), ['foo'=>'bar']);

            return 'foo';
        });
        $this->assertEquals('foo', $res);
    }

    public function testRunTransactionNotRetryable()
    {
        $this->expectException(\RangeException::class);
        $this->expectExceptionMessage('foo');

        $transactionId = 'foobar';

        $databaseName =  V1FirestoreGapicClient::databaseRootName(self::PROJECT, self::DATABASE);
        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'beginTransaction',
            Argument::that(function ($request) use ($databaseName) {
                return $request->getDatabase() == $databaseName;
            }),
            Argument::cetera()
        )->shouldBeCalled()->willReturn([
            'transaction' => $transactionId
        ]);

        $this->connection->commit()->shouldNotBeCalled();

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'rollback',
            Argument::that(function ($request) use ($databaseName, $transactionId) {
                return $request->getDatabase() == $databaseName
                    && $request->getTransaction() == $transactionId;
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1);

        $this->client->___setProperty('connection', $this->connection->reveal());
        $this->client->___setProperty('requestHandler', $this->requestHandler->reveal());

        $res = $this->client->runTransaction(function ($t) {
            throw new \RangeException('foo');
        });
    }

    public function testRunTransactionExceedsMaxRetries()
    {
        $this->expectException(AbortedException::class);

        $transactionId = 'foobar';

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'beginTransaction',
            Argument::type(BeginTransactionRequest::class),
            Argument::cetera()
        )->shouldBeCalledTimes(6)->willReturn([
            'transaction' => $transactionId
        ]);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'commit',
            Argument::type(CommitRequest::class),
            Argument::cetera()
        )
            ->shouldBeCalledTimes(6)
            ->willThrow(new AbortedException('foo'));

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'rollback',
            Argument::type(RollbackRequest::class),
            Argument::cetera()
        )->shouldBeCalledTimes(6);

        $this->client->___setProperty('connection', $this->connection->reveal());
        $this->client->___setProperty('requestHandler', $this->requestHandler->reveal());

        $res = $this->client->runTransaction(function ($t) {
            $doc = $this->prophesize(DocumentReference::class);
            $doc->name()->willReturn('foo');
            $t->create($doc->reveal(), ['foo'=>'bar']);
        });
    }

    public function testRunTransactionExceedsMaxRetriesLowerLimit()
    {
        $this->expectException(AbortedException::class);

        $transactionId = 'foobar';

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'beginTransaction',
            Argument::type(BeginTransactionRequest::class),
            Argument::cetera()
        )->shouldBeCalledTimes(3)->willReturn([
            'transaction' => $transactionId
        ]);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'commit',
            Argument::type(CommitRequest::class),
            Argument::cetera()
        )->shouldBeCalledTimes(3)->willThrow(new AbortedException('foo'));

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'rollback',
            Argument::type(RollbackRequest::class),
            Argument::cetera()
        )->shouldBeCalledTimes(3);

        $this->client->___setProperty('connection', $this->connection->reveal());
        $this->client->___setProperty('requestHandler', $this->requestHandler->reveal());

        $res = $this->client->runTransaction(function ($t) {
            $doc = $this->prophesize(DocumentReference::class);
            $doc->name()->willReturn('foo');
            $t->create($doc->reveal(), ['foo'=>'bar']);
        }, ['maxRetries' => 2]);
    }

    public function testGeoPoint()
    {
        $lat = 1.1;
        $lng = 2.2;
        $point = $this->client->geoPoint($lat, $lng);
        $this->assertInstanceOf(GeoPoint::class, $point);
        $this->assertEquals($lat, $point->latitude());
        $this->assertEquals($lng, $point->longitude());
    }

    public function testBlob()
    {
        $val = 'hello world';
        $blob = $this->client->blob($val);
        $this->assertInstanceOf(Blob::class, $blob);
        $this->assertEquals($val, (string)$blob);
    }

    public function testFieldPath()
    {
        $parts = ['foo', 'bar'];
        $path = $this->client->fieldPath($parts);
        $this->assertInstanceOf(FieldPath::class, $path);
        $this->assertEquals($parts, $path->path());
    }

    public function testSessionHandler()
    {
        $sessionHandler = $this->client->sessionHandler();
        $this->assertInstanceOf(FirestoreSessionHandler::class, $sessionHandler);
    }

    private function noop()
    {
        return function () {
            return;
        };
    }
}
