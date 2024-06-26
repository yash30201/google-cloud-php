<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/grpc_route.proto

namespace Google\Cloud\NetworkServices\V1\GrpcRoute;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Criteria for matching traffic. A RouteMatch will be considered to match
 * when all supplied fields match.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.GrpcRoute.RouteMatch</code>
 */
class RouteMatch extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A gRPC method to match against. If this field is empty or
     * omitted, will match all methods.
     *
     * Generated from protobuf field <code>optional .google.cloud.networkservices.v1.GrpcRoute.MethodMatch method = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $method = null;
    /**
     * Optional. Specifies a collection of headers to match.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkservices.v1.GrpcRoute.HeaderMatch headers = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $headers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\NetworkServices\V1\GrpcRoute\MethodMatch $method
     *           Optional. A gRPC method to match against. If this field is empty or
     *           omitted, will match all methods.
     *     @type array<\Google\Cloud\NetworkServices\V1\GrpcRoute\HeaderMatch>|\Google\Protobuf\Internal\RepeatedField $headers
     *           Optional. Specifies a collection of headers to match.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\GrpcRoute::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A gRPC method to match against. If this field is empty or
     * omitted, will match all methods.
     *
     * Generated from protobuf field <code>optional .google.cloud.networkservices.v1.GrpcRoute.MethodMatch method = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\NetworkServices\V1\GrpcRoute\MethodMatch|null
     */
    public function getMethod()
    {
        return $this->method;
    }

    public function hasMethod()
    {
        return isset($this->method);
    }

    public function clearMethod()
    {
        unset($this->method);
    }

    /**
     * Optional. A gRPC method to match against. If this field is empty or
     * omitted, will match all methods.
     *
     * Generated from protobuf field <code>optional .google.cloud.networkservices.v1.GrpcRoute.MethodMatch method = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\NetworkServices\V1\GrpcRoute\MethodMatch $var
     * @return $this
     */
    public function setMethod($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkServices\V1\GrpcRoute\MethodMatch::class);
        $this->method = $var;

        return $this;
    }

    /**
     * Optional. Specifies a collection of headers to match.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkservices.v1.GrpcRoute.HeaderMatch headers = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Optional. Specifies a collection of headers to match.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkservices.v1.GrpcRoute.HeaderMatch headers = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\NetworkServices\V1\GrpcRoute\HeaderMatch>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHeaders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\NetworkServices\V1\GrpcRoute\HeaderMatch::class);
        $this->headers = $arr;

        return $this;
    }

}


