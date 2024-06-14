<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/dep.proto

namespace Google\Cloud\NetworkServices\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for getting a `LbRouteExtension` resource.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.GetLbRouteExtensionRequest</code>
 */
class GetLbRouteExtensionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A name of the `LbRouteExtension` resource to get. Must be in the
     * format
     * `projects/{project}/locations/{location}/lbRouteExtensions/{lb_route_extension}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. A name of the `LbRouteExtension` resource to get. Must be in the
     *           format
     *           `projects/{project}/locations/{location}/lbRouteExtensions/{lb_route_extension}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\Dep::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A name of the `LbRouteExtension` resource to get. Must be in the
     * format
     * `projects/{project}/locations/{location}/lbRouteExtensions/{lb_route_extension}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. A name of the `LbRouteExtension` resource to get. Must be in the
     * format
     * `projects/{project}/locations/{location}/lbRouteExtensions/{lb_route_extension}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

