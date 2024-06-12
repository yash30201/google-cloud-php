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

namespace Google\Cloud\Firestore\Tests\Snippet;

use Google\Cloud\Core\RequestHandler;
use Google\Cloud\Core\Testing\ArrayHasSameValuesToken;
use Google\Cloud\Core\Testing\FirestoreTestHelperTrait;
use Google\Cloud\Core\Testing\GrpcTestTrait;
use Google\Cloud\Core\Testing\Snippet\Parser\Snippet;
use Google\Cloud\Core\Testing\Snippet\SnippetTestCase;
use Google\Cloud\Core\Testing\TestHelpers;
use Google\Cloud\Firestore\Connection\ConnectionInterface;
use Google\Cloud\Firestore\Query;
use Google\Cloud\Firestore\QuerySnapshot;
use Google\Cloud\Firestore\V1\Client\FirestoreClient as V1FirestoreClient;
use Google\Cloud\Firestore\V1\RunAggregationQueryRequest;
use Google\Cloud\Firestore\V1\RunQueryRequest;
use Google\Cloud\Firestore\V1\StructuredQuery\Direction;
use Google\Cloud\Firestore\ValueMapper;
use Prophecy\Argument;
use Prophecy\PhpUnit\ProphecyTrait;
use Google\Cloud\Firestore\V1\StructuredQuery\CompositeFilter\Operator;
use Google\Cloud\Firestore\V1\StructuredQuery\FieldFilter\Operator as FieldFilterOperator;

/**
 * @group firestore
 * @group firestore-query
 */
class QueryTest extends SnippetTestCase
{
    use FirestoreTestHelperTrait;
    use GrpcTestTrait;
    use ProphecyTrait;

    public const QUERY_PARENT = 'projects/example_project/databases/(default)/documents';
    public const COLLECTION = 'a';
    public const NAME = 'projects/example_project/databases/(default)/documents/a/b';

    private $connection;
    private $requestHandler;
    private $serializer;

    public function setUp(): void
    {
        $this->connection = $this->prophesize(ConnectionInterface::class);
        $this->requestHandler = $this->prophesize(RequestHandler::class);
        $this->serializer = $this->getSerializer();
    }

    public function testClass()
    {
        $this->checkAndSkipGrpcTests();

        $snippet = $this->snippetFromClass(Query::class);
        $res = $snippet->invoke('query');
        $this->assertInstanceOf(Query::class, $res->returnVal());
    }

    public function testDocuments()
    {
        $query = TestHelpers::stub(Query::class, [
            $this->connection->reveal(),
            $this->requestHandler->reveal(),
            $this->serializer,
            new ValueMapper(
                $this->connection->reveal(),
                $this->requestHandler->reveal(),
                $this->serializer,
                false
            ),
            self::QUERY_PARENT,
            [
                'from' => [
                    [
                        'collectionId' => self::COLLECTION,
                    ]
                ]
            ]
        ], ['requestHandler']);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'runQuery',
            Argument::type(RunQueryRequest::class),
            Argument::cetera()
        )->shouldBeCalled()->willReturn(new \ArrayIterator([]));

        $query->___setProperty('requestHandler', $this->requestHandler->reveal());

        $snippet = $this->snippetFromMethod(Query::class, 'documents');
        $snippet->addLocal('query', $query);
        $res = $snippet->invoke('result');
        $this->assertInstanceOf(QuerySnapshot::class, $res->returnVal());
    }

    public function testCount()
    {
        $query = TestHelpers::stub(Query::class, [
            $this->connection->reveal(),
            $this->requestHandler->reveal(),
            $this->serializer,
            new ValueMapper(
                $this->connection->reveal(),
                $this->requestHandler->reveal(),
                $this->serializer,
                false
            ),
            self::QUERY_PARENT,
            [
                'from' => [
                    [
                        'collectionId' => self::COLLECTION,
                    ]
                ]
            ]
        ], ['requestHandler']);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'runAggregationQuery',
            Argument::type(RunAggregationQueryRequest::class),
            Argument::cetera()
        )->shouldBeCalled()->willReturn(new \ArrayIterator([
              [
                  'result' => [
                      'aggregateFields' => [
                          'count' => ['integerValue' => 1]
                      ]
                  ]
              ]
          ]));

        $query->___setProperty('requestHandler', $this->requestHandler->reveal());

        $snippet = $this->snippetFromMethod(Query::class, 'count');
        $snippet->addLocal('query', $query);
        $res = $snippet->invoke('count');
        $this->assertEquals(1, $res->returnVal());
    }

    public function testAddAggregation()
    {
        $query = TestHelpers::stub(Query::class, [
            $this->connection->reveal(),
            $this->requestHandler->reveal(),
            $this->serializer,
            new ValueMapper(
                $this->connection->reveal(),
                $this->requestHandler->reveal(),
                $this->serializer,
                false
            ),
            self::QUERY_PARENT,
            [
                'from' => [
                    [
                        'collectionId' => self::COLLECTION,
                    ]
                ]
            ]
        ], ['requestHandler']);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'runAggregationQuery',
            Argument::type(RunAggregationQueryRequest::class),
            Argument::cetera()
        )->shouldBeCalled()->willReturn(new \ArrayIterator([
              [
                  'result' => [
                      'aggregateFields' => [
                          'count_upto_1' => ['integerValue' => 1]
                      ]
                  ]
              ]
          ]));

        $query->___setProperty('requestHandler', $this->requestHandler->reveal());

        $snippet = $this->snippetFromMethod(Query::class, 'addAggregation');
        $snippet->addLocal('query', $query);
        $res = $snippet->invoke('countUpto1');
        $this->assertEquals(1, $res->returnVal());
    }

    public function testSelect()
    {
        $snippet = $this->snippetFromMethod(Query::class, 'select');
        $this->runAndAssert($snippet, 'select', [
            'fields' => [['fieldPath' => 'firstName']]
        ]);
    }

    public function testWhere()
    {
        $snippet = $this->snippetFromMethod(Query::class, 'where');
        $this->runAndAssert($snippet, 'where', [
            'fieldFilter' => [
                'field' => [
                    'fieldPath' => 'firstName'
                ],
                'op' => Query::OP_EQUAL,
                'value' => [
                    'stringValue' => 'John'
                ]
            ]
        ]);
    }

    public function testWhereNaN()
    {
        $snippet = $this->snippetFromMethod(Query::class, 'where', 1);
        $this->runAndAssert($snippet, 'where', [
            'unaryFilter' => [
                'field' => [
                    'fieldPath' => 'coolnessPercentage'
                ],
                'op' => Query::OP_NAN,
            ]
        ]);
    }

    public function testWhereArrayContains()
    {
        $snippet = $this->snippetFromMethod(Query::class, 'where', 2);
        $this->runAndAssert($snippet, 'where', [
            'fieldFilter' => [
                'field' => [
                    'fieldPath' => 'friends'
                ],
                'op' => Query::OP_ARRAY_CONTAINS,
                'value' => [
                    'arrayValue' => [
                        'values' => [
                            [
                                'stringValue' => 'Steve'
                            ], [
                                'stringValue' => 'Sarah'
                            ]
                        ]
                    ]
                ]
            ]
        ]);
    }

    public function testWhereWithFilter()
    {
        $snippet = $this->snippetFromMethod(Query::class, 'where', 3);
        $this->runAndAssert($snippet, 'where', [
                'compositeFilter' => [
                    'op' => Operator::PBOR,
                    'filters' => [
                        [
                            'fieldFilter' => [
                                'field' => [
                                    'fieldPath' => 'firstName'
                                ],
                                'op' => FieldFilterOperator::EQUAL,
                                'value' => [
                                    'stringValue' => 'John'
                                ]
                            ]
                        ],
                        [
                            'fieldFilter' => [
                                'field' => [
                                    'fieldPath' => 'firstName'
                                ],
                                'op' => FieldFilterOperator::EQUAL,
                                'value' => [
                                    'stringValue' => 'Monica'
                                ]
                            ]
                        ]
                    ]
                ]
        ]);
    }

    public function testOrderBy()
    {
        $snippet = $this->snippetFromMethod(Query::class, 'orderBy');
        $this->runAndAssert($snippet, 'orderBy', [
            [
                'field' => [
                    'fieldPath' => 'firstName'
                ],
                'direction' => Query::DIR_DESCENDING
            ]
        ]);
    }

    public function testLimit()
    {
        $snippet = $this->snippetFromMethod(Query::class, 'limit');
        $this->runAndAssert($snippet, 'limit', ['value' => 10]);
    }

    public function testLimitToLast()
    {
        $snippet = $this->snippetFromMethod(Query::class, 'limitToLast');
        $this->runAndAssertArray($snippet, [
            'limit' => ['value' => 10],
            'orderBy' => [
                [
                    'field' => [
                        'fieldPath' => 'firstName'
                    ],
                    'direction' => Direction::ASCENDING
                ]
            ]
        ]);
    }

    public function testOffset()
    {
        $snippet = $this->snippetFromMethod(Query::class, 'offset');
        $this->runAndAssert($snippet, 'offset', 10);
    }

    /**
     * @dataProvider cursors
     */
    public function testCursors($method, $key, $before, $value)
    {
        $cursor = ['foo' => 'bar'];
        $snippet = $this->snippetFromMethod(Query::class, $method);
        $snippet->setLine(1, '');
        $snippet->addLocal('cursor', $cursor);

        $cursorArr = [
            'values' => [
                ['integerValue' => $value]
            ]
        ];

        if ($before) {
            $cursorArr['before'] = $before;
        }

        $this->runAndAssertArray($snippet, [
            $key => $cursorArr,
            'orderBy' => [
                [
                    'field' => [
                        'fieldPath' => 'age'
                    ],
                    'direction' => Query::DIR_ASCENDING
                ]
            ]
        ]);
    }

    public function cursors()
    {
        return [
            ['startAt', 'startAt', true, 18],
            ['startAfter', 'startAt', false, 17],
            ['endBefore', 'endAt', true, 18],
            ['endAt', 'endAt', false, 17]
        ];
    }

    private function runAndAssert(Snippet $snippet, $key, $argument)
    {
        return $this->runAndAssertArray($snippet, [$key => $argument]);
    }

    private function runAndAssertArray(Snippet $snippet, array $query, $allDescendants = false)
    {
        $from = [
            [
                'collectionId' => self::COLLECTION,
                'allDescendants' => $allDescendants
            ]
        ];

        $q = TestHelpers::stub(Query::class, [
            $this->connection->reveal(),
            $this->requestHandler->reveal(),
            $this->serializer,
            new ValueMapper(
                $this->connection->reveal(),
                $this->requestHandler->reveal(),
                $this->serializer,
                false
            ),
            self::QUERY_PARENT,
            [
                'from' => $from
            ]
        ], ['requestHandler']);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'runQuery',
            Argument::that(function ($req) use ($query, $from) {
                $data = $this->getSerializer()->encodeMessage($req);
                return $data['parent'] == self::QUERY_PARENT
                    && array_replace_recursive($data['structuredQuery'], ['from' => $from] + $query)
                        == $data['structuredQuery'];
            }),
            Argument::cetera()
        )->shouldBeCalled()->willReturn(new \ArrayIterator([[]]));

        $q->___setProperty('requestHandler', $this->requestHandler->reveal());
        $snippet->addLocal('query', $q);

        $res = $snippet->invoke('query');
        $res->returnVal()->documents(['maxRetries' => 0]);
        $this->assertInstanceOf(Query::class, $res->returnVal());
    }
}
