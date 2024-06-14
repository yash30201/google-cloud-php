<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START networkservices_v1_generated_NetworkServices_UpdateTcpRoute_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\NetworkServices\V1\NetworkServicesClient;
use Google\Cloud\NetworkServices\V1\TcpRoute;
use Google\Cloud\NetworkServices\V1\TcpRoute\RouteAction;
use Google\Cloud\NetworkServices\V1\TcpRoute\RouteRule;
use Google\Rpc\Status;

/**
 * Updates the parameters of a single TcpRoute.
 *
 * @param string $tcpRouteName Name of the TcpRoute resource. It matches pattern
 *                             `projects/&#42;/locations/global/tcpRoutes/tcp_route_name>`.
 */
function update_tcp_route_sample(string $tcpRouteName): void
{
    // Create a client.
    $networkServicesClient = new NetworkServicesClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $tcpRouteRulesAction = new RouteAction();
    $routeRule = (new RouteRule())
        ->setAction($tcpRouteRulesAction);
    $tcpRouteRules = [$routeRule,];
    $tcpRoute = (new TcpRoute())
        ->setName($tcpRouteName)
        ->setRules($tcpRouteRules);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $networkServicesClient->updateTcpRoute($tcpRoute);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var TcpRoute $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $tcpRouteName = '[NAME]';

    update_tcp_route_sample($tcpRouteName);
}
// [END networkservices_v1_generated_NetworkServices_UpdateTcpRoute_sync]
