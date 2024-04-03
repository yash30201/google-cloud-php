<?php
/**
 * Copyright 2016 Google Inc.
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

namespace Google\Cloud\Datastore\Tests\Unit;

use Google\ApiCore\Serializer;
use Google\Cloud\Core\ApiHelperTrait;
use Google\Cloud\Core\RequestHandler;
use Google\Cloud\Core\Testing\DatastoreOperationRefreshTrait;
use Google\Cloud\Core\Testing\TestHelpers;
use Google\Cloud\Datastore\Connection\ConnectionInterface;
use Google\Cloud\Datastore\Entity;
use Google\Cloud\Datastore\EntityIterator;
use Google\Cloud\Datastore\EntityMapper;
use Google\Cloud\Datastore\Key;
use Google\Cloud\Datastore\Operation;
use Google\Cloud\Datastore\Query\GqlQuery;
use Google\Cloud\Datastore\Query\Query;
use Google\Cloud\Datastore\Query\QueryInterface;
use Google\Cloud\Datastore\V1\Client\DatastoreClient;
use Google\Cloud\Datastore\V1\LookupRequest;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Prophecy\PhpUnit\ProphecyTrait;

/**
 * @group datastore
 * @group datastore-operation
 */
class OperationTest extends TestCase
{
    use ProphecyTrait;
    use ApiHelperTrait;
    use DatastoreOperationRefreshTrait;

    public const PROJECT = 'example-project';
    public const NAMESPACEID = 'namespace-id';
    public const DATABASEID = 'database-id';

    private $operation;
    private $connection;
    private $requestHandler;
    private $serializer;

    public function setUp(): void
    {
        $this->connection = $this->prophesize(ConnectionInterface::class);
        $this->requestHandler = $this->prophesize(RequestHandler::class);
        $this->serializer = new Serializer([], [
            'google.protobuf.Value' => function ($v) {
                return $this->flattenValue($v);
            },
            'google.protobuf.Timestamp' => function ($v) {
                return $this->formatTimestampFromApi($v);
            }
        ], [], [
            'google.protobuf.Timestamp' => function ($v) {
                if (is_string($v)) {
                    $dt = new \DateTime($v);
                    return ['seconds' => $dt->format('U')];
                }
                return $v;
            }
        ]);
        $this->operation = TestHelpers::stub(Operation::class, [
            $this->connection->reveal(),
            $this->requestHandler->reveal(),
            $this->serializer,
            self::PROJECT,
            null,
            new EntityMapper('foo', true, false),
            self::DATABASEID,
        ], ['connection', 'requestHandler', 'namespaceId']);
    }

    public function testKey()
    {
        $key = $this->operation->key('Foo', 'Bar');

        $this->assertInstanceOf(Key::class, $key);
        $this->assertEquals('Foo', $key->path()[0]['kind']);
        $this->assertEquals('Bar', $key->path()[0]['name']);
    }

    public function testKeyWithNamespaceId()
    {
        $this->operation->___setProperty('namespaceId', self::NAMESPACEID);
        $key = $this->operation->key('Person', 'Bob');
        $obj = $key->keyObject();

        $this->assertEquals(self::NAMESPACEID, $obj['partitionId']['namespaceId']);
    }

    public function testKeyWithDatabaseId()
    {
        $key = $this->operation->key('Person', 'Bob', ['databaseId' => self::DATABASEID]);
        $obj = $key->keyObject();

        $this->assertEquals(self::DATABASEID, $obj['partitionId']['databaseId']);
    }

    public function testKeyWithNamespaceIdOverride()
    {
        $this->operation->___setProperty('namespaceId', self::NAMESPACEID);
        $key = $this->operation->key('Person', 'Bob', [
            'namespaceId' => 'otherNamespace',
        ]);
        $obj = $key->keyObject();

        $this->assertEquals('otherNamespace', $obj['partitionId']['namespaceId']);
    }

    public function testKeyWithDatabaseIdOverride()
    {
        $key = $this->operation->key('Person', 'Bob', [
            'databaseId' => 'otherDatabaseId',
        ]);
        $obj = $key->keyObject();

        $this->assertEquals('otherDatabaseId', $obj['partitionId']['databaseId']);
    }

    public function testKeys()
    {
        $keys = $this->operation->keys('Foo');
        $this->assertCount(1, $keys);
        $this->assertInstanceOf(Key::class, $keys[0]);
    }

    public function testKeysNumber()
    {
        $keys = $this->operation->keys('Foo', [
            'number' => 10,
        ]);

        $this->assertCount(10, $keys);
    }

    public function testKeysNumberCopy()
    {
        $keys = $this->operation->keys('Foo', [
            'number' => 2,
        ]);

        $keys[0]->setLastElementIdentifier(10);
        $this->assertEquals(10, $keys[0]->pathEndIdentifier());
        $this->assertNull($keys[1]->pathEndIdentifier());
    }

    public function testKeysNumberZero()
    {
        $this->expectException(InvalidArgumentException::class);

        $this->operation->keys('Foo', [
            'number' => 0,
        ]);
    }

    public function testKeysAncestors()
    {
        $keys = $this->operation->keys('Foo', [
            'ancestors' => [
                ['kind' => 'Kind', 'id' => '10'],
            ],
        ]);

        $this->assertEquals($keys[0]->path(), [
            ['kind' => 'Kind', 'id' => '10'],
            ['kind' => 'Foo'],
        ]);
    }

    public function testKeysId()
    {
        $keys = $this->operation->keys('Foo', [
            'id' => '10',
        ]);

        $this->assertEquals($keys[0]->path(), [
            ['kind' => 'Foo', 'id' => '10'],
        ]);
    }

    public function testKeysName()
    {
        $keys = $this->operation->keys('Foo', [
            'name' => '10',
        ]);

        $this->assertEquals($keys[0]->path(), [
            ['kind' => 'Foo', 'name' => '10'],
        ]);
    }

    public function testEntity()
    {
        $key = $this->operation->key('Person');
        $e = $this->operation->entity($key);

        $this->assertInstanceOf(Entity::class, $e);
    }

    public function testEntityWithKind()
    {
        $e = $this->operation->entity('Foo');
        $this->assertInstanceOf(Entity::class, $e);
        $this->assertEquals($e->key()->state(), Key::STATE_INCOMPLETE);
        $this->assertEquals('Foo', $e->key()->pathEnd()['kind']);
    }

    public function testInvalidKeyType()
    {
        $this->expectException(InvalidArgumentException::class);

        $this->operation->entity(1);
    }

    public function testEntityCustomClass()
    {
        $e = $this->operation->entity('Foo', [], [
            'className' => SampleEntity::class,
        ]);

        $this->assertInstanceOf(SampleEntity::class, $e);
    }

    public function testEntityCustomClassInvalidType()
    {
        $this->expectException(InvalidArgumentException::class);

        $e = $this->operation->entity('Foo', [], [
            'className' => Operation::class,
        ]);
    }

    public function testAllocateIds()
    {
        $key = $this->operation->key('foo');

        $id = 12345;
        $keyWithId = clone $key;
        $keyWithId->setLastElementIdentifier($id);

        $this->mockSendRequest(
            'allocateIds',
            ['keys' => [$key->keyObject()]],
            ['keys' => [$keyWithId->keyObject()]]
        );

        $this->operation->___setProperty('requestHandler', $this->requestHandler->reveal());

        $res = $this->operation->allocateIds([$key]);

        $this->assertEquals($res[0]->state(), Key::STATE_NAMED);
        $this->assertEquals($res[0]->path()[0]['id'], $id);
    }

    public function testAllocateIdsNamedKey()
    {
        $this->expectException(InvalidArgumentException::class);

        $key = $this->operation->key('foo', 'Bar');

        $this->operation->allocateIds([$key]);
    }

    public function testLookup()
    {
        $key = $this->operation->key('foo', 'Bar');

        $this->mockSendRequest(
            'lookup',
            [],
            [],
            0
        );

        $this->operation->___setProperty('connection', $this->connection->reveal());

        $res = $this->operation->lookup([$key]);

        $this->assertIsArray($res);
    }

    public function testLookupFound()
    {
        $body = json_decode(file_get_contents(Fixtures::ENTITY_BATCH_LOOKUP_FIXTURE()), true);
        $this->mockSendRequest(
            'lookup',
            [],
            ['found' => $body,]
        );

        $this->operation->___setProperty('connection', $this->connection->reveal());

        $key = $this->operation->key('Kind', 'ID');
        $res = $this->operation->lookup([$key]);

        $this->assertIsArray($res);
        $this->assertTrue(isset($res['found']) && is_array($res['found']));

        $this->assertInstanceOf(Entity::class, $res['found'][0]);
        $this->assertEquals($res['found'][0]['Number'], $body[0]['entity']['properties']['Number']['stringValue']);

        $this->assertInstanceOf(Entity::class, $res['found'][1]);
        $this->assertEquals($res['found'][1]['Number'], $body[1]['entity']['properties']['Number']['stringValue']);
    }

    public function testLookupMissing()
    {
        $body = json_decode(file_get_contents(Fixtures::ENTITY_BATCH_LOOKUP_FIXTURE()), true);

        $this->mockSendRequest(
            'lookup',
            [],
            ['missing' => $body,]
        );

        $this->operation->___setProperty('connection', $this->connection->reveal());

        $key = $this->operation->key('Kind', 'ID');

        $res = $this->operation->lookup([$key]);

        $this->assertIsArray($res);
        $this->assertTrue(isset($res['missing']) && is_array($res['missing']));

        $this->assertInstanceOf(Key::class, $res['missing'][0]);
        $this->assertInstanceOf(Key::class, $res['missing'][1]);
    }

    public function testLookupDeferred()
    {
        $body = json_decode(file_get_contents(Fixtures::ENTITY_BATCH_LOOKUP_FIXTURE()), true);

        $this->mockSendRequest(
            'lookup',
            [],
            ['deferred' => [$body[0]['entity']['key']]]
        );

        $this->operation->___setProperty('connection', $this->connection->reveal());

        $key = $this->operation->key('Kind', 'ID');

        $res = $this->operation->lookup([$key]);

        $this->assertIsArray($res);
        $this->assertTrue(isset($res['deferred']) && is_array($res['deferred']));
        $this->assertInstanceOf(Key::class, $res['deferred'][0]);
    }

    public function testLookupWithReadOptionsFromTransaction()
    {
        $this->mockSendRequest(
            'lookup',
            ['readOptions' => ['transaction' => 'foo']],
            [],
            0
        );
        $this->operation->___setProperty('requestHandler', $this->requestHandler->reveal());

        $k = new Key('test-project', [
            'path' => [['kind' => 'kind', 'id' => '123']],
        ]);

        $this->operation->lookup([$k], ['transaction' => 'foo']);
    }

    public function testLookupWithReadOptionsFromReadConsistency()
    {
        $this->mockSendRequest(
            'lookup',
            ['readOptions' => ['readConsistency' => 123]],
            [],
            0
        );
        $this->operation->___setProperty('requestHandler', $this->requestHandler->reveal());

        $k = new Key('test-project', [
            'path' => [['kind' => 'kind', 'id' => '123']],
        ]);

        $this->operation->lookup([$k], ['readConsistency' => 123]);
    }

    public function testLookupWithoutReadOptions()
    {
        $this->requestHandler->sendRequest(
            Argument::any(),
            Argument::any(),
            Argument::that(function (LookupRequest $arg) {
                return !$arg->hasReadOptions();
            }),
            Argument::cetera()
        )->shouldBeCalled()->willReturn([]);
        $this->operation->___setProperty('requestHandler', $this->requestHandler->reveal());

        $k = new Key('test-project', [
            'path' => [['kind' => 'kind', 'id' => '123']],
        ]);

        $this->operation->lookup([$k]);
    }

    public function testLookupWithSort()
    {
        $data = json_decode(file_get_contents(Fixtures::ENTITY_LOOKUP_BIGSORT_FIXTURE()), true);

        $keys = [];
        foreach ($data['keys'] as $key) {
            $keys[] = new Key('test-project', [
                'path' => $key['path'],
            ]);
        }

        $this->mockSendRequest(
            'lookup',
            [],
            ['found' => $data['entities']]
        );
        $this->operation->___setProperty('requestHandler', $this->requestHandler->reveal());

        $res = $this->operation->lookup($keys, [
            'sort' => true,
        ]);

        $found = $res['found'];

        foreach ($data['keys'] as $i => $key) {
            $this->assertEquals($key['path'][0]['id'], $found[$i]->key()->path()[0]['id']);
        }
    }

    public function testLookupWithoutSort()
    {
        $data = json_decode(file_get_contents(Fixtures::ENTITY_LOOKUP_BIGSORT_FIXTURE()), true);

        $keys = [];
        foreach ($data['keys'] as $key) {
            $keys[] = new Key('test-project', [
                'path' => $key['path'],
            ]);
        }

        $this->mockSendRequest(
            'lookup',
            [],
            [
                'found' => $data['entities'],
                'missing' => $data['missing'],
            ]
        );
        $this->operation->___setProperty('requestHandler', $this->requestHandler->reveal());

        $res = $this->operation->lookup($keys);

        $found = $res['found'];

        foreach ($data['entities'] as $i => $e) {
            $this->assertEquals($e['entity']['key']['path'][0]['id'], $found[$i]->key()->path()[0]['id']);
        }
    }

    public function testLookupWithSortAndMissingKey()
    {
        $data = json_decode(file_get_contents(Fixtures::ENTITY_LOOKUP_BIGSORT_FIXTURE()), true);

        // Move an entity to missing.
        $missing = $data['entities'][5];
        $data['missing'][] = $missing;
        unset($data['entities'][5]);

        $keys = [];
        foreach ($data['keys'] as $key) {
            $keys[] = new Key('test-project', [
                'path' => $key['path'],
            ]);
        }

        $this->mockSendRequest(
            'lookup',
            [],
            ['found' => $data['entities'],]
        );
        $this->operation->___setProperty('requestHandler', $this->requestHandler->reveal());

        $res = $this->operation->lookup($keys, [
            'sort' => true,
        ]);

        $found = $res['found'];

        $this->assertEquals($keys[0]->path()[0]['id'], $found[0]->key()->path()[0]['id']);
        $this->assertEquals($keys[1]->path()[0]['id'], $found[1]->key()->path()[0]['id']);
        $this->assertEquals($keys[2]->path()[0]['id'], $found[2]->key()->path()[0]['id']);
        $this->assertEquals($keys[3]->path()[0]['id'], $found[3]->key()->path()[0]['id']);
        $this->assertEquals($keys[4]->path()[0]['id'], $found[4]->key()->path()[0]['id']);
        $this->assertEquals($keys[6]->path()[0]['id'], $found[5]->key()->path()[0]['id']);
        $this->assertEquals($keys[7]->path()[0]['id'], $found[6]->key()->path()[0]['id']);
        $this->assertEquals($keys[8]->path()[0]['id'], $found[7]->key()->path()[0]['id']);
        $this->assertEquals($keys[9]->path()[0]['id'], $found[8]->key()->path()[0]['id']);
        $this->assertEquals($keys[10]->path()[0]['id'], $found[9]->key()->path()[0]['id']);
    }

    public function testLookupInvalidKey()
    {
        $this->expectException(InvalidArgumentException::class);

        $key = $this->operation->key('Foo');

        $this->operation->lookup([$key]);
    }

    public function testRunQuery()
    {
        $queryResult = json_decode(file_get_contents(Fixtures::QUERY_RESULTS_FIXTURE()), true);
        $this->mockSendRequest(
            'runQuery',
            [],
            $queryResult['notPaged']
        );

        $this->operation->___setProperty('requestHandler', $this->requestHandler->reveal());

        $q = $this->prophesize(QueryInterface::class);
        $q->queryKey()->shouldBeCalled()->willReturn('query');
        $q->queryObject()->shouldBeCalled()->willReturn([]);
        $q->canPaginate()->willReturn(true);
        $q->start(Argument::any());

        $res = $this->operation->runQuery($q->reveal());

        $this->assertInstanceOf(EntityIterator::class, $res);

        $arr = iterator_to_array($res);
        $this->assertCount(2, $arr);
        $this->assertInstanceOf(Entity::class, $arr[0]);
    }

    /**
     * @dataProvider queries
     */
    public function testRunQueryPaged($query)
    {
        $queryResult = json_decode(file_get_contents(Fixtures::QUERY_RESULTS_FIXTURE()), true);

        $outerThis = $this;
        $this->requestHandler->sendRequest(
            DatastoreClient::class,
            'runQuery',
            Argument::cetera()
        )->will(function ($args, $mock) use ($queryResult, $outerThis) {
            // The 2nd call will return the 2nd page of results!
            $mock->sendRequest(
                DatastoreClient::class,
                'runQuery',
                Argument::that(function ($arg) use ($queryResult, $outerThis) {
                    $data = $outerThis->serializer->encodeMessage($arg);
                    $x = $data['query']['startCursor'] === $queryResult['paged'][0]['batch']['endCursor'];
                    return $data['query']['startCursor'] === $queryResult['paged'][0]['batch']['endCursor'];
                }),
                Argument::any()
            )->willReturn($queryResult['paged'][1]);
            return $queryResult['paged'][0];
        });

        $this->operation->___setProperty('requestHandler', $this->requestHandler->reveal());

        $res = $this->operation->runQuery($query);

        $this->assertInstanceOf(EntityIterator::class, $res);

        $arr = iterator_to_array($res);
        $this->assertCount(3, $arr);
        $this->assertInstanceOf(Entity::class, $arr[0]);
    }

    public function queries()
    {
        $em = $this->prophesize(EntityMapper::class);
        $query = new Query($em->reveal());
        $gql = new GqlQuery($em->reveal(), 'SELECT 1');
        return [
            [$query],
            [$gql],
        ];
    }

    public function testRunQueryNoResults()
    {
        $queryResult = json_decode(file_get_contents(Fixtures::QUERY_RESULTS_FIXTURE()), true);
        $this->mockSendRequest(
            'runQuery',
            [],
            $queryResult['noResults']
        );

        $this->operation->___setProperty('requestHandler', $this->requestHandler->reveal());

        $q = $this->prophesize(QueryInterface::class);
        $q->queryKey()->shouldBeCalled()->willReturn('query');
        $q->queryObject()->shouldBeCalled()->willReturn([]);
        $q->canPaginate()->shouldBeCalled()->willReturn(false);

        $res = $this->operation->runQuery($q->reveal());

        $this->assertInstanceOf(EntityIterator::class, $res);

        $arr = iterator_to_array($res);
        $this->assertCount(0, $arr);
    }

    public function testRunQueryWithReadOptionsFromTransaction()
    {
        $this->mockSendRequest(
            'runQuery',
            [],
            [],
            0
        );

        $this->operation->___setProperty('requestHandler', $this->requestHandler->reveal());

        $q = $this->prophesize(QueryInterface::class);
        $q->queryKey()->willReturn('query');
        $q->queryObject()->willReturn([]);

        $res = $this->operation->runQuery($q->reveal(), ['transaction' => 'foo']);
        iterator_to_array($res);
    }

    public function testRunQueryWithReadOptionsFromReadConsistency()
    {
        $this->mockSendRequest(
            'runQuery',
            [],
            [],
            0
        );

        $this->operation->___setProperty('requestHandler', $this->requestHandler->reveal());

        $q = $this->prophesize(QueryInterface::class);
        $q->queryKey()->willReturn('query');
        $q->queryObject()->willReturn([]);

        $res = $this->operation->runQuery($q->reveal(), ['readConsistency' => 123]);
        iterator_to_array($res);
    }

    public function testRunQueryWithoutReadOptions()
    {
        $this->requestHandler->sendRequest(
            DatastoreClient::class,
            'runQuery',
            Argument::that(function ($req) {return !$req->hasReadOptions();}),
            Argument::cetera()
        )->willReturn([])->shouldBeCalled();

        $this->operation->___setProperty('requestHandler', $this->requestHandler->reveal());

        $q = $this->prophesize(QueryInterface::class);
        $q->queryKey()->willReturn('query');
        $q->queryObject()->willReturn([]);

        $res = $this->operation->runQuery($q->reveal());
        iterator_to_array($res);
    }

    public function testRunQueryWithDatabaseIdOverride()
    {
        // $this->connection
        //     ->runQuery(
        //         Argument::withEntry('databaseId', 'otherDatabaseId')
        //     )
        //     ->shouldBeCalledTimes(1)
        //     ->willReturn([]);
        $this->mockSendRequest(
            'runQuery',
            ['databaseId' => 'otherDatabaseId'],
            [],
            1
        );

        $mapper = new EntityMapper('foo', true, false);
        $query = new Query($mapper);

        $iterator = $this->operation->runQuery(
            $query,
            ['databaseId' => 'otherDatabaseId']
        );
        $res = iterator_to_array($iterator);
    }

    public function testCommit()
    {
        $this->connection->commit(Argument::allOf(
            Argument::withEntry('mode', 'NON_TRANSACTIONAL'),
            Argument::that(function ($arg) {
                return count($arg['mutations']) === 0;
            })
        ))->shouldBeCalled()->willReturn(['foo']);

        $this->operation->___setProperty('connection', $this->connection->reveal());

        $this->assertEquals(['foo'], $this->operation->commit([]));
    }

    public function testCommitInTransaction()
    {
        $this->connection->commit(Argument::allOf(
            Argument::withEntry('mode', 'TRANSACTIONAL'),
            Argument::that(function ($arg) {
                return count($arg['mutations']) === 0;
            })
        ))->shouldBeCalled()->willReturn(['foo']);

        $this->operation->___setProperty('connection', $this->connection->reveal());

        $this->operation->commit([], [
            'transaction' => '1234',
        ]);
    }

    public function testCommitWithMutation()
    {
        $this->connection->commit(Argument::that(function ($arg) {
            return count($arg['mutations']) === 1;
        }))->shouldBeCalled()->willReturn(['foo']);

        $this->operation->___setProperty('connection', $this->connection->reveal());

        $key = $this->operation->key('Person');
        $e = new Entity($key);

        $mutation = $this->operation->mutation('insert', $e, Entity::class, null);

        $this->operation->commit([$mutation]);
    }

    public function testCommitWithDatabaseIdOverride()
    {
        $this->connection
            ->commit(
                Argument::withEntry('databaseId', 'otherDatabaseId')
            )
            ->shouldBeCalledTimes(1)
            ->willReturn([]);

        $iterator = $this->operation->commit(
            [],
            ['databaseId' => 'otherDatabaseId']
        );
    }

    public function testRollback()
    {
        $this->connection->rollback(Argument::allOf(
            Argument::withEntry('projectId', self::PROJECT),
            Argument::withEntry('transaction', 'bar')
        ))->shouldBeCalled()->willReturn(null);

        $this->operation->___setProperty('connection', $this->connection->reveal());

        $this->operation->rollback('bar');
    }

    public function testAllocateIdsToEntities()
    {
        $completeKey = $this->operation->key('Foo', 'Bar');
        $partialKey = $this->operation->key('Foo');

        $id = 12345;
        $keyWithId = clone $partialKey;
        $keyWithId->setLastElementIdentifier($id);

        $this->mockSendRequest(
            'allocateIds',
            ['keys' => [$partialKey->keyObject()]],
            ['keys' => [$keyWithId->keyObject()]]
        );

        $this->operation->___setProperty('requestHandler', $this->requestHandler->reveal());

        $entities = [
            $this->operation->entity($completeKey),
            $this->operation->entity($partialKey),
        ];

        $res = $this->operation->allocateIdsToEntities($entities);

        $this->assertInstanceOf(Entity::class, $res[0]);
        $this->assertInstanceOf(Entity::class, $res[1]);

        $this->assertEquals($res[0]->key()->state(), Key::STATE_NAMED);
        $this->assertEquals($res[1]->key()->state(), Key::STATE_NAMED);
    }

    public function testMutate()
    {
        $id = 12345;

        $this->connection->commit(Argument::that(function ($arg) {
            if (count($arg['mutations']) !== 1) {
                return false;
            }

            if (!isset($arg['mutations'][0]['insert'])) {
                return false;
            }

            return true;
        }))->shouldBeCalled();

        $this->operation->___setProperty('connection', $this->connection->reveal());

        $key = $this->operation->key('Person', $id);
        $e = new Entity($key);

        $mutation = $this->operation->mutation('insert', $e, Entity::class, null);
        $this->operation->commit([$mutation]);
    }

    public function testMutateWithBaseVersion()
    {
        $this->connection->commit(Argument::that(function ($arg) {
            return $arg['mutations'][0]['baseVersion'] === 1;
        }))->willReturn('foo');

        $this->operation->___setProperty('connection', $this->connection->reveal());

        $key = $this->prophesize(Key::class);
        $e = new Entity($key->reveal(), [], [
            'baseVersion' => 1,
        ]);

        $mutation = $this->operation->mutation('insert', $e, Entity::class);
        $ret = $this->operation->commit([$mutation]);
        $this->assertEquals('foo', $ret);
    }

    public function testMutateWithKey()
    {
        $this->connection->commit(Argument::that(function ($arg) {
            if (!isset($arg['mutations'][0]['delete'])) {
                return false;
            }

            if (!isset($arg['mutations'][0]['delete']['path'])) {
                return false;
            }

            return true;
        }))->willReturn('foo');

        $this->operation->___setProperty('connection', $this->connection->reveal());

        $key = new Key('foo', [
            'path' => [['kind' => 'foo', 'id' => 1]],
        ]);

        $mutation = $this->operation->mutation('delete', $key, Key::class);
        $ret = $this->operation->commit([$mutation]);
        $this->assertEquals('foo', $ret);
    }

    public function testMutateInvalidType()
    {
        $this->expectException(InvalidArgumentException::class);

        $this->operation->mutation('foo', (object) [], \stdClass::class);
    }

    public function testCheckOverwrite()
    {
        $e = $this->prophesize(Entity::class);
        $e->populatedByService()->willReturn(true)->shouldBeCalled();

        $this->operation->checkOverwrite([$e->reveal()]);
    }

    public function testCheckOverwriteWithFlagEnabled()
    {
        $e = $this->prophesize(Entity::class);
        $e->populatedByService()->willReturn(false)->shouldBeCalled();

        $this->operation->checkOverwrite([$e->reveal()], true);
    }

    public function testCheckOverwriteWithException()
    {
        $this->expectException(InvalidArgumentException::class);

        $e = $this->prophesize(Entity::class);
        $e->populatedByService()->willReturn(false);
        $e->key()->willReturn('foo');

        $this->operation->checkOverwrite([$e->reveal()]);
    }

    public function testMapEntityResult()
    {
        $res = json_decode(file_get_contents(Fixtures::ENTITY_RESULT_FIXTURE()), true);

        $this->mockSendRequest(
            'lookup',
            [],
            ['found' => $res,]
        );
        $this->operation->___setProperty('requestHandler', $this->requestHandler->reveal());

        $key = $this->operation->key('Person', 12345);

        $entity = $this->operation->lookup([$key]);
        $this->assertInstanceOf(Entity::class, $entity['found'][0]);

        $this->assertEquals($entity['found'][0]->baseVersion(), $res[0]['version']);
        $this->assertEquals($entity['found'][0]->cursor(), $res[0]['cursor']);
        $this->assertEquals($entity['found'][0]->prop, $res[0]['entity']['properties']['prop']['stringValue']);
    }

    public function testMapEntityResultWithoutProperties()
    {
        $res = json_decode(file_get_contents(Fixtures::ENTITY_RESULT_NO_PROPERTIES_FIXTURE()), true);

        $this->mockSendRequest(
            'lookup',
            [],
            ['found' => $res,]
        );
        $this->operation->___setProperty('requestHandler', $this->requestHandler->reveal());

        $key = $this->operation->key('Person', 12345);

        $entity = $this->operation->lookup([$key]);
        $this->assertInstanceOf(Entity::class, $entity['found'][0]);

        $this->assertEquals($entity['found'][0]->baseVersion(), $res[0]['version']);
        $this->assertEquals($entity['found'][0]->cursor(), $res[0]['cursor']);
    }

    public function testMapEntityResultArrayOfClassNames()
    {
        $res = json_decode(file_get_contents(Fixtures::ENTITY_RESULT_FIXTURE()), true);

        $this->mockSendRequest(
            'lookup',
            [],
            ['found' => $res,]
        );
        $this->operation->___setProperty('requestHandler', $this->requestHandler->reveal());

        $key = $this->operation->key('Person', 12345);

        $entity = $this->operation->lookup([$key], [
            'className' => [
                'Kind' => SampleEntity::class,
            ],
        ]);

        $this->assertInstanceOf(SampleEntity::class, $entity['found'][0]);
    }

    public function testMapEntityResultArrayOfClassNamesMissingKindMapItem()
    {
        $this->expectException(InvalidArgumentException::class);

        $res = json_decode(file_get_contents(Fixtures::ENTITY_RESULT_FIXTURE()), true);

        $this->mockSendRequest(
            'lookup',
            [],
            ['found' => $res,]
        );
        $this->operation->___setProperty('requestHandler', $this->requestHandler->reveal());

        $key = $this->operation->key('Person', 12345);

        $entity = $this->operation->lookup([$key], [
            'className' => [
                'Kind2' => SampleEntity::class,
            ],
        ]);
    }

    public function testTransactionInReadOptions()
    {
        $this->mockSendRequest(
            'lookup',
            ['readOptions' => ['transaction' => '1234']],
            [],
            0
        );
        $this->operation->___setProperty('requestHandler', $this->requestHandler->reveal());

        $key = $this->operation->key('Person', 12345);
        $this->operation->lookup([$key], [
            'transaction' => '1234',
        ]);
    }

    public function testNonTransactionalReadOptions()
    {
        $this->requestHandler->sendRequest(
            Argument::any(),
            Argument::any(),
            Argument::that(function (LookupRequest $arg) {
                return (!$arg->hasReadOptions()) || (!$arg->getReadOptions()->hasTransaction());
            }),
            Argument::cetera()
        )->shouldBeCalled()->willReturn([]);
        $this->operation->___setProperty('requestHandler', $this->requestHandler->reveal());

        $key = $this->operation->key('Person', 12345);
        $this->operation->lookup([$key]);
    }

    public function testReadConsistencyInReadOptions()
    {
        $this->mockSendRequest(
            'lookup',
            ['readOptions' => ['readConsistency' => 123]],
            [],
            0
        );

        $this->operation->___setProperty('requestHandler', $this->requestHandler->reveal());

        $key = $this->operation->key('Person', 12345);
        $this->operation->lookup([$key], [
            'readConsistency' => 123,
        ]);
    }

    public function testInvalidBatchType()
    {
        $this->expectException(InvalidArgumentException::class);

        $this->operation->lookup(['foo']);
    }

    public function testBeginTransactionWithDatabaseIdOverride()
    {
        $this->mockSendRequest(
            'beginTransaction',
            ['databaseId' => 'otherDatabaseId'],
            ['transaction' => 'valid_test_transaction']
        );

        $transactionId = $this->operation->beginTransaction(
            [],
            ['databaseId' => 'otherDatabaseId']
        );

        $this->assertEquals('valid_test_transaction', $transactionId);
    }

    public function testAllocateIdsWithDatabaseIdOverride()
    {
        $this->mockSendRequest(
            'allocateIds',
            ['databaseId' => 'otherDatabaseId'],
            [],
            1
        );

        $this->operation->___setProperty('requestHandler', $this->requestHandler->reveal());

        $this->operation->allocateIds(
            [],
            ['databaseId' => 'otherDatabaseId']
        );
    }

    public function testLookupWithDatabaseIdOverride()
    {
        // $this->connection
        //     ->lookup(
        //         Argument::withEntry('databaseId', 'otherDatabaseId')
        //     )
        //     ->shouldBeCalledTimes(1)
        //     ->willReturn([]);

        $this->mockSendRequest(
            'lookup',
            ['databaseId' => 'otherDatabaseId'],
            [],
            1
        );

        $this->operation->lookup(
            [],
            ['databaseId' => 'otherDatabaseId']
        );
    }
}
