<?php
/**
 * Copyright 2018 Google Inc.
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

namespace Google\Cloud\Core\Testing;

use Google\ApiCore\Serializer;
use Google\Cloud\Core\RequestHandler;
use Google\Cloud\Datastore\EntityMapper;
use Google\Cloud\Datastore\Operation;
use Google\Cloud\Datastore\V1\Client\DatastoreClient;
use Prophecy\Argument;

/**
 * Refresh Datastore operation class
 *
 * @experimental
 * @internal
 */
trait DatastoreOperationRefreshTrait
{
    private static Serializer $_serializer;

    /**
     * Refresh the operation property of a given stubbed class.
     *
     * @param mixed $stub
     * @param RequestHandler $requestHandler
     * @param array $options {
     *     Configuration Options
     *
     *     @type string $projectId the project id.
     *     @type bool $returnInt64AsObject if true, will encode int64s as objects.
     *     @type bool $encode whether to base64-encode certain values.
     * }
     * @return mixed
     */
    public function refreshOperation($stub, RequestHandler $requestHandler, array $options = [])
    {
        $options += [
            'projectId' => null,
            'returnInt64AsObject' => false,
            'encode' => false
        ];

        $mapper = new EntityMapper(
            $options['projectId'],
            $options['encode'],
            $options['returnInt64AsObject']
        );

        $serializer = $this->getSerializer();

        $stub->___setProperty('operation', new Operation(
            $requestHandler,
            $serializer,
            $options['projectId'],
            $options['returnInt64AsObject'],
            $mapper
        ));

        return $stub;
    }

    /**
     * @return Serializer
     */
    private function getSerializer()
    {
        if (isset(self::$_serializer)) {
            return self::$_serializer;
        }

        if (isset($this->serializer)) {
            return self::$_serializer = $this->serializer;
        }

        return self::$_serializer = new Serializer([], [
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
    }
}
