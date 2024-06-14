<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/binaryauthorization/v1/service.proto

namespace Google\Cloud\BinaryAuthorization\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [BinauthzManagementService.GetPolicy][].
 *
 * Generated from protobuf message <code>google.cloud.binaryauthorization.v1.GetPolicyRequest</code>
 */
class GetPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the [policy][google.cloud.binaryauthorization.v1.Policy] to retrieve,
     * in the format `projects/&#42;&#47;policy`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The resource name of the [policy][google.cloud.binaryauthorization.v1.Policy] to retrieve,
     *                     in the format `projects/&#42;/policy`. Please see
     *                     {@see BinauthzManagementServiceV1Client::policyName()} for help formatting this field.
     *
     * @return \Google\Cloud\BinaryAuthorization\V1\GetPolicyRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the [policy][google.cloud.binaryauthorization.v1.Policy] to retrieve,
     *           in the format `projects/&#42;&#47;policy`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Binaryauthorization\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the [policy][google.cloud.binaryauthorization.v1.Policy] to retrieve,
     * in the format `projects/&#42;&#47;policy`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the [policy][google.cloud.binaryauthorization.v1.Policy] to retrieve,
     * in the format `projects/&#42;&#47;policy`.
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

