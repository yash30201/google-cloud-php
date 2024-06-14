<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orgpolicy/v2/orgpolicy.proto

namespace Google\Cloud\OrgPolicy\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request sent to the [DeletePolicy]
 * [google.cloud.orgpolicy.v2.OrgPolicy.DeletePolicy] method.
 *
 * Generated from protobuf message <code>google.cloud.orgpolicy.v2.DeletePolicyRequest</code>
 */
class DeletePolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the policy to delete.
     * See the policy entry for naming rules.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. The current etag of policy. If an etag is provided and does not
     * match the current etag of the policy, deletion will be blocked and an
     * ABORTED error will be returned.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $etag = '';

    /**
     * @param string $name Required. Name of the policy to delete.
     *                     See the policy entry for naming rules. Please see
     *                     {@see OrgPolicyClient::policyName()} for help formatting this field.
     *
     * @return \Google\Cloud\OrgPolicy\V2\DeletePolicyRequest
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
     *           Required. Name of the policy to delete.
     *           See the policy entry for naming rules.
     *     @type string $etag
     *           Optional. The current etag of policy. If an etag is provided and does not
     *           match the current etag of the policy, deletion will be blocked and an
     *           ABORTED error will be returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orgpolicy\V2\Orgpolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the policy to delete.
     * See the policy entry for naming rules.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the policy to delete.
     * See the policy entry for naming rules.
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

    /**
     * Optional. The current etag of policy. If an etag is provided and does not
     * match the current etag of the policy, deletion will be blocked and an
     * ABORTED error will be returned.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. The current etag of policy. If an etag is provided and does not
     * match the current etag of the policy, deletion will be blocked and an
     * ABORTED error will be returned.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

