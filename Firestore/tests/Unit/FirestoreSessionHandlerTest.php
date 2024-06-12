<?php
/**
 * Copyright 2019 Google LLC
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

use Exception;
use Google\Cloud\Core\Exception\ServiceException;
use Google\Cloud\Core\RequestHandler;
use Google\Cloud\Core\Testing\FirestoreTestHelperTrait;
use Google\Cloud\Firestore\ValueMapper;
use Google\Cloud\Firestore\FirestoreSessionHandler;
use Google\Cloud\Firestore\V1\BatchGetDocumentsRequest;
use Google\Cloud\Firestore\V1\Client\FirestoreClient as V1FirestoreClient;
use Google\Cloud\Firestore\V1\CommitRequest;
use Google\Cloud\Firestore\V1\FirestoreClient as V1FirestoreGapicClient;
use Google\Cloud\Firestore\V1\RollbackRequest;
use Google\Cloud\Firestore\V1\RunQueryRequest;
use InvalidArgumentException;
use Iterator;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Prophecy\PhpUnit\ProphecyTrait;

/**
 * @group firestore
 * @group firestore-session
 */
class FirestoreSessionHandlerTest extends TestCase
{
    use FirestoreTestHelperTrait;
    use ProphecyTrait;

    const SESSION_SAVE_PATH = 'sessions';
    const SESSION_NAME = 'PHPSESSID';
    const PROJECT = 'example_project';
    const DATABASE = '(default)';

    private $requestHandler;
    private $serializer;
    private $valueMapper;
    private $documents;

    public function setUp(): void
    {
        $this->requestHandler = $this->prophesize(RequestHandler::class);
        $this->serializer = $this->getSerializer();
        $this->valueMapper = $this->prophesize(ValueMapper::class);
        $this->documents = $this->prophesize(Iterator::class);
    }

    public function testOpen()
    {
        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'beginTransaction',
            Argument::that(function ($request) {
                return $request->getDatabase() == $this->dbName();
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1)->willReturn(['transaction' => null]);

        $firestoreSessionHandler = new FirestoreSessionHandler(
            $this->requestHandler->reveal(),
            $this->serializer,
            $this->valueMapper->reveal(),
            self::PROJECT,
            self::DATABASE
        );
        $ret = $firestoreSessionHandler->open(self::SESSION_SAVE_PATH, self::SESSION_NAME);
        $this->assertTrue($ret);
    }

    public function testOpenWithException()
    {
        $this->expectWarningUsingErrorhandler();

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'beginTransaction',
            Argument::that(function ($request) {
                return $request->getDatabase() == $this->dbName();
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1)->willThrow(new ServiceException(''));

        $firestoreSessionHandler = new FirestoreSessionHandler(
            $this->requestHandler->reveal(),
            $this->serializer,
            $this->valueMapper->reveal(),
            self::PROJECT,
            self::DATABASE
        );
        $ret = $firestoreSessionHandler->open(self::SESSION_SAVE_PATH, self::SESSION_NAME);
        $this->assertFalse($ret);
    }

    public function testReadNotAllowed()
    {
        $this->expectException(InvalidArgumentException::class);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'beginTransaction',
            Argument::that(function ($request) {
                return $request->getDatabase() == $this->dbName();
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1)->willReturn(['transaction' => null]);

        $firestoreSessionHandler = new FirestoreSessionHandler(
            $this->requestHandler->reveal(),
            $this->serializer,
            $this->valueMapper->reveal(),
            self::PROJECT,
            self::DATABASE
        );
        $firestoreSessionHandler->open('invalid/savepath', self::SESSION_NAME);
        $firestoreSessionHandler->read('sessionid');
    }

    public function testClose()
    {
        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'beginTransaction',
            Argument::that(function ($request) {
                return $request->getDatabase() == $this->dbName();
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1)->willReturn(['transaction' => 123]);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'rollback',
            Argument::type(RollbackRequest::class),
            Argument::cetera()
        )->shouldBeCalledTimes(1);

        $firestoreSessionHandler = new FirestoreSessionHandler(
            $this->requestHandler->reveal(),
            $this->serializer,
            $this->valueMapper->reveal(),
            self::PROJECT,
            self::DATABASE
        );
        $firestoreSessionHandler->open(self::SESSION_SAVE_PATH, self::SESSION_NAME);
        $ret = $firestoreSessionHandler->close();
        $this->assertTrue($ret);
    }

    public function testReadNothing()
    {
        $this->documents->current()
            ->shouldBeCalledTimes(1)
            ->willReturn(null);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'beginTransaction',
            Argument::that(function ($request) {
                return $request->getDatabase() == $this->dbName();
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1)->willReturn(['transaction' => null]);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'batchGetDocuments',
            Argument::that(function ($req) {
                $data = $this->getSerializer()->encodeMessage($req);
                return $data['database'] == $this->dbName()
                    && $data['documents'] == [$this->documentName()]
                    && !isset($data['transaction']);
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1)->willReturn($this->documents->reveal());
        $firestoreSessionHandler = new FirestoreSessionHandler(
            $this->requestHandler->reveal(),
            $this->serializer,
            $this->valueMapper->reveal(),
            self::PROJECT,
            self::DATABASE
        );
        $firestoreSessionHandler->open(self::SESSION_SAVE_PATH, self::SESSION_NAME);
        $ret = $firestoreSessionHandler->read('sessionid');

        $this->assertEquals('', $ret);
    }

    public function testReadWithException()
    {
        $this->expectWarningUsingErrorhandler();

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'beginTransaction',
            Argument::that(function ($request) {
                return $request->getDatabase() == $this->dbName();
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1)->willReturn(['transaction' => null]);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'batchGetDocuments',
            Argument::that(function ($req) {
                $data = $this->getSerializer()->encodeMessage($req);
                return $data['database'] == $this->dbName()
                    && $data['documents'] == [$this->documentName()]
                    && !isset($data['transaction']);
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1)->willThrow((new ServiceException('')));
        $firestoreSessionHandler = new FirestoreSessionHandler(
            $this->requestHandler->reveal(),
            $this->serializer,
            $this->valueMapper->reveal(),
            self::PROJECT,
            self::DATABASE
        );
        $firestoreSessionHandler->open(self::SESSION_SAVE_PATH, self::SESSION_NAME);
        $ret = $firestoreSessionHandler->read('sessionid');

        $this->assertEquals('', $ret);
    }

    public function testReadEntity()
    {
        $this->documents->current()
            ->shouldBeCalledTimes(1)
            ->willReturn([
                'found' => [
                    'createTime' => date('Y-m-d'),
                    'updateTime' => date('Y-m-d'),
                    'readTime' => date('Y-m-d'),
                    'fields' => ['data' => 'sessiondata']
                ]
            ]);
        $this->valueMapper->decodeValues(['data' => 'sessiondata'])
            ->shouldBeCalledTimes(1)
            ->willReturn(['data' => 'sessiondata']);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'beginTransaction',
            Argument::that(function ($request) {
                return $request->getDatabase() == $this->dbName();
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1)->willReturn(['transaction' => null]);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'batchGetDocuments',
            Argument::that(function ($req) {
                $data = $this->getSerializer()->encodeMessage($req);
                return $data['database'] == $this->dbName()
                    && $data['documents'] == [$this->documentName()]
                    && !isset($data['transaction']);
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1)->willReturn($this->documents->reveal());
        $firestoreSessionHandler = new FirestoreSessionHandler(
            $this->requestHandler->reveal(),
            $this->serializer,
            $this->valueMapper->reveal(),
            self::PROJECT,
            self::DATABASE
        );

        $firestoreSessionHandler->open(self::SESSION_SAVE_PATH, self::SESSION_NAME);
        $ret = $firestoreSessionHandler->read('sessionid');

        $this->assertEquals('sessiondata', $ret);
    }

    public function testWrite()
    {
        $phpunit = $this;
        $this->valueMapper->encodeValues(Argument::type('array'))
            ->will(function ($args) use ($phpunit) {
                $phpunit->assertEquals('sessiondata', $args[0]['data']);
                $phpunit->assertTrue(is_int($args[0]['t']));
                return ['data' => ['stringValue' => 'sessiondata']];
            });

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'beginTransaction',
            Argument::that(function ($request) {
                return $request->getDatabase() == $this->dbName();
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1)->willReturn(['transaction' => null]);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'commit',
            Argument::that(function ($req) {
                $data = $this->getSerializer()->encodeMessage($req);
                $expected = [
                    'database' => $this->dbName(),
                    'writes' => [
                        [
                            'update' => [
                                'name' => $this->documentName(),
                                'fields' => [
                                    'data' => ['stringValue' => 'sessiondata']
                                ]
                            ]
                        ]
                    ]
                ];

                return array_replace_recursive($data, $expected) == $data;
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1);

        $firestoreSessionHandler = new FirestoreSessionHandler(
            $this->requestHandler->reveal(),
            $this->serializer,
            $this->valueMapper->reveal(),
            self::PROJECT,
            self::DATABASE
        );
        $firestoreSessionHandler->open(self::SESSION_SAVE_PATH, self::SESSION_NAME);
        $ret = $firestoreSessionHandler->write('sessionid', 'sessiondata');
        $firestoreSessionHandler->close();

        $this->assertTrue($ret);
    }

    public function testWriteWithException()
    {
        $this->expectWarningUsingErrorhandler();

        $phpunit = $this;
        $this->valueMapper->encodeValues(Argument::type('array'))
            ->will(function ($args) use ($phpunit) {
                $phpunit->assertEquals('sessiondata', $args[0]['data']);
                $phpunit->assertTrue(is_int($args[0]['t']));
                return ['data' => ['stringValue' => 'sessiondata']];
            });

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'beginTransaction',
            Argument::that(function ($request) {
                return $request->getDatabase() == $this->dbName();
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1)->willReturn(['transaction' => 123]);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'rollback',
            Argument::that(function ($request) {
                return $request->getDatabase() == $this->dbName()
                    && $request->getTransaction() == 123;
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'commit',
            Argument::type(CommitRequest::class),
            Argument::cetera()
        )
            ->shouldBeCalledTimes(1)
            ->willThrow((new ServiceException('')));
        $firestoreSessionHandler = new FirestoreSessionHandler(
            $this->requestHandler->reveal(),
            $this->serializer,
            $this->valueMapper->reveal(),
            self::PROJECT,
            self::DATABASE
        );

        $firestoreSessionHandler->open(self::SESSION_SAVE_PATH, self::SESSION_NAME);
        $ret = $firestoreSessionHandler->write('sessionid', 'sessiondata');
        $firestoreSessionHandler->close();

        $this->assertFalse($ret);
    }

    public function testDestroy()
    {
        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'beginTransaction',
            Argument::that(function ($request) {
                return $request->getDatabase() == $this->dbName();
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1)->willReturn(['transaction' => 123]);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'commit',
            Argument::that(function ($req) {
                $data = $this->getSerializer()->encodeMessage($req);
                return $data['database'] == $this->dbName()
                    && $data['writes'][0]['delete'] == $this->documentName()
                    && $data['transaction'] == 123;
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1);

        $firestoreSessionHandler = new FirestoreSessionHandler(
            $this->requestHandler->reveal(),
            $this->serializer,
            $this->valueMapper->reveal(),
            self::PROJECT,
            self::DATABASE
        );
        $firestoreSessionHandler->open(self::SESSION_SAVE_PATH, self::SESSION_NAME);
        $ret = $firestoreSessionHandler->destroy('sessionid');
        $firestoreSessionHandler->close();

        $this->assertTrue($ret);
    }

    public function testDestroyWithException()
    {
        $this->expectWarningUsingErrorhandler();

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'beginTransaction',
            Argument::that(function ($request) {
                return $request->getDatabase() == $this->dbName();
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1)->willReturn(['transaction' => 123]);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'commit',
            Argument::type(CommitRequest::class),
            Argument::cetera()
        )
            ->shouldBeCalledTimes(1)
            ->willThrow(new ServiceException(''));
        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'rollback',
            Argument::that(function ($request) {
                return $request->getDatabase() == $this->dbName()
                    && $request->getTransaction() == 123;
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1);
        $firestoreSessionHandler = new FirestoreSessionHandler(
            $this->requestHandler->reveal(),
            $this->serializer,
            $this->valueMapper->reveal(),
            self::PROJECT,
            self::DATABASE
        );
        $firestoreSessionHandler->open(self::SESSION_SAVE_PATH, self::SESSION_NAME);
        $ret = $firestoreSessionHandler->destroy('sessionid');
        $firestoreSessionHandler->close();

        $this->assertFalse($ret);
    }

    public function testDefaultGcDoesNothing()
    {
        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'beginTransaction',
            Argument::that(function ($request) {
                return $request->getDatabase() == $this->dbName();
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1)->willReturn(['transaction' => 123]);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'commit',
            Argument::cetera()
        )->shouldNotBeCalled();

        $firestoreSessionHandler = new FirestoreSessionHandler(
            $this->requestHandler->reveal(),
            $this->serializer,
            $this->valueMapper->reveal(),
            self::PROJECT,
            self::DATABASE
        );
        $firestoreSessionHandler->open(self::SESSION_SAVE_PATH, self::SESSION_NAME);
        $ret = $firestoreSessionHandler->gc(100);

        $this->assertTrue($ret);
    }

    public function testGc()
    {
        $phpunit = $this;
        $this->documents->valid()
            ->shouldBeCalledTimes(2)
            ->willReturn(true, false);
        $this->documents->current()
            ->shouldBeCalledTimes(1)
            ->willReturn([
                'document' => [
                    'name' => $this->documentName(),
                    'fields' => [],
                    'createTime' => date('Y-m-d'),
                    'updateTime' => date('Y-m-d'),
                ],
                'readTime' => date('Y-m-d'),
            ]);
        $this->documents->next()
            ->shouldBeCalledTimes(1);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'beginTransaction',
            Argument::that(function ($request) {
                return $request->getDatabase() == $this->dbName();
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(2)->willReturn(['transaction' => 123]);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'runQuery',
            Argument::that(function ($req) use ($phpunit) {
                $data = $this->getSerializer()->encodeMessage($req);
                $phpunit->assertEquals(
                    $phpunit->dbName() . '/documents',
                    $data['parent']
                );
                $phpunit->assertEquals(['value' => 499], $data['structuredQuery']['limit']);
                $phpunit->assertEquals(
                    self::SESSION_SAVE_PATH . ':' . self::SESSION_NAME,
                    $data['structuredQuery']['from'][0]['collectionId']
                );
                $phpunit->assertEquals(123, $data['transaction']);
                return true;
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1)->willReturn($this->documents->reveal());

        $this->valueMapper->decodeValues([])
            ->shouldBeCalledTimes(1)
            ->willReturn(['data' => 'sessiondata']);
        $this->valueMapper->encodeValue(Argument::type('integer'))
            ->shouldBeCalledTimes(1)->will(fn ($arg) => ['integerValue' => $arg[0]]);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'commit',
            Argument::that(function ($req) {
                $data = $this->getSerializer()->encodeMessage($req);
                return $data['database'] == $this->dbName()
                    && $data['writes'][0]['delete'] == $this->documentName()
                    && $data['transaction'] == 123;
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(1);

        $firestoreSessionHandler = new FirestoreSessionHandler(
            $this->requestHandler->reveal(),
            $this->serializer,
            $this->valueMapper->reveal(),
            self::PROJECT,
            self::DATABASE,
            ['gcLimit' => 499, 'query' => ['maxRetries' => 0]]
        );

        $firestoreSessionHandler->open(self::SESSION_SAVE_PATH, self::SESSION_NAME);
        $ret = $firestoreSessionHandler->gc(100);

        $this->assertEquals(1, $ret);
    }

    public function testGcWithException()
    {
        $this->expectWarningUsingErrorhandler();

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'beginTransaction',
            Argument::that(function ($request) {
                return $request->getDatabase() == $this->dbName();
            }),
            Argument::cetera()
        )->shouldBeCalledTimes(2)->willReturn(['transaction' => 123]);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'runQuery',
            Argument::type(RunQueryRequest::class),
            Argument::cetera()
        )->shouldBeCalledTimes(1)
            ->willThrow(new ServiceException(''));

        $this->valueMapper->encodeValue(Argument::type('integer'))
            ->will(fn ($arg) => ['integerValue' => $arg[0]]);
        $firestoreSessionHandler = new FirestoreSessionHandler(
            $this->requestHandler->reveal(),
            $this->serializer,
            $this->valueMapper->reveal(),
            self::PROJECT,
            self::DATABASE,
            ['gcLimit' => 500, 'query' => ['maxRetries' => 0]]
        );

        $firestoreSessionHandler->open(self::SESSION_SAVE_PATH, self::SESSION_NAME);
        $ret = $firestoreSessionHandler->gc(100);

        $this->assertFalse($ret);
    }

    private function expectWarningUsingErrorhandler()
    {
        set_error_handler(static function (int $errno, string $errstr): never {
            throw new Exception($errstr, $errno);
        }, E_USER_WARNING);
        $this->expectException(Exception::class);
    }

    private function dbName()
    {
        return sprintf(
            'projects/%s/databases/%s',
            self::PROJECT,
            self::DATABASE
        );
    }

    private function documentName()
    {
        return sprintf(
            '%s/documents/%s:%s/sessionid',
            $this->dbName(),
            self::SESSION_SAVE_PATH,
            self::SESSION_NAME
        );
    }
}
