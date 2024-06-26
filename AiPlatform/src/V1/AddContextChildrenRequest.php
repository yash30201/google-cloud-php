<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/metadata_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [MetadataService.AddContextChildren][google.cloud.aiplatform.v1.MetadataService.AddContextChildren].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.AddContextChildrenRequest</code>
 */
class AddContextChildrenRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the parent Context.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/contexts/{context}`
     *
     * Generated from protobuf field <code>string context = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $context = '';
    /**
     * The resource names of the child Contexts.
     *
     * Generated from protobuf field <code>repeated string child_contexts = 2 [(.google.api.resource_reference) = {</code>
     */
    private $child_contexts;

    /**
     * @param string   $context       Required. The resource name of the parent Context.
     *
     *                                Format:
     *                                `projects/{project}/locations/{location}/metadataStores/{metadatastore}/contexts/{context}`
     *                                Please see {@see MetadataServiceClient::contextName()} for help formatting this field.
     * @param string[] $childContexts The resource names of the child Contexts.
     *
     * @return \Google\Cloud\AIPlatform\V1\AddContextChildrenRequest
     *
     * @experimental
     */
    public static function build(string $context, array $childContexts): self
    {
        return (new self())
            ->setContext($context)
            ->setChildContexts($childContexts);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $context
     *           Required. The resource name of the parent Context.
     *           Format:
     *           `projects/{project}/locations/{location}/metadataStores/{metadatastore}/contexts/{context}`
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $child_contexts
     *           The resource names of the child Contexts.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MetadataService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the parent Context.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/contexts/{context}`
     *
     * Generated from protobuf field <code>string context = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Required. The resource name of the parent Context.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/contexts/{context}`
     *
     * Generated from protobuf field <code>string context = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setContext($var)
    {
        GPBUtil::checkString($var, True);
        $this->context = $var;

        return $this;
    }

    /**
     * The resource names of the child Contexts.
     *
     * Generated from protobuf field <code>repeated string child_contexts = 2 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChildContexts()
    {
        return $this->child_contexts;
    }

    /**
     * The resource names of the child Contexts.
     *
     * Generated from protobuf field <code>repeated string child_contexts = 2 [(.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChildContexts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->child_contexts = $arr;

        return $this;
    }

}

