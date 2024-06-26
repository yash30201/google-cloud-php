<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/http_route.proto

namespace Google\Cloud\NetworkServices\V1\HttpRoute;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifications of a destination to which the request should be routed to.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.HttpRoute.Destination</code>
 */
class Destination extends \Google\Protobuf\Internal\Message
{
    /**
     * The URL of a BackendService to route traffic to.
     *
     * Generated from protobuf field <code>string service_name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $service_name = '';
    /**
     * Specifies the proportion of requests forwarded to the backend referenced
     * by the serviceName field. This is computed as:
     * - weight/Sum(weights in this destination list).
     * For non-zero values, there may be some epsilon from the exact proportion
     * defined here depending on the precision an implementation supports.
     * If only one serviceName is specified and it has a weight greater than 0,
     * 100% of the traffic is forwarded to that backend.
     * If weights are specified for any one service name, they need to be
     * specified for all of them.
     * If weights are unspecified for all services, then, traffic is distributed
     * in equal proportions to all of them.
     *
     * Generated from protobuf field <code>int32 weight = 2;</code>
     */
    protected $weight = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_name
     *           The URL of a BackendService to route traffic to.
     *     @type int $weight
     *           Specifies the proportion of requests forwarded to the backend referenced
     *           by the serviceName field. This is computed as:
     *           - weight/Sum(weights in this destination list).
     *           For non-zero values, there may be some epsilon from the exact proportion
     *           defined here depending on the precision an implementation supports.
     *           If only one serviceName is specified and it has a weight greater than 0,
     *           100% of the traffic is forwarded to that backend.
     *           If weights are specified for any one service name, they need to be
     *           specified for all of them.
     *           If weights are unspecified for all services, then, traffic is distributed
     *           in equal proportions to all of them.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\HttpRoute::initOnce();
        parent::__construct($data);
    }

    /**
     * The URL of a BackendService to route traffic to.
     *
     * Generated from protobuf field <code>string service_name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * The URL of a BackendService to route traffic to.
     *
     * Generated from protobuf field <code>string service_name = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setServiceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_name = $var;

        return $this;
    }

    /**
     * Specifies the proportion of requests forwarded to the backend referenced
     * by the serviceName field. This is computed as:
     * - weight/Sum(weights in this destination list).
     * For non-zero values, there may be some epsilon from the exact proportion
     * defined here depending on the precision an implementation supports.
     * If only one serviceName is specified and it has a weight greater than 0,
     * 100% of the traffic is forwarded to that backend.
     * If weights are specified for any one service name, they need to be
     * specified for all of them.
     * If weights are unspecified for all services, then, traffic is distributed
     * in equal proportions to all of them.
     *
     * Generated from protobuf field <code>int32 weight = 2;</code>
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Specifies the proportion of requests forwarded to the backend referenced
     * by the serviceName field. This is computed as:
     * - weight/Sum(weights in this destination list).
     * For non-zero values, there may be some epsilon from the exact proportion
     * defined here depending on the precision an implementation supports.
     * If only one serviceName is specified and it has a weight greater than 0,
     * 100% of the traffic is forwarded to that backend.
     * If weights are specified for any one service name, they need to be
     * specified for all of them.
     * If weights are unspecified for all services, then, traffic is distributed
     * in equal proportions to all of them.
     *
     * Generated from protobuf field <code>int32 weight = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setWeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->weight = $var;

        return $this;
    }

}


