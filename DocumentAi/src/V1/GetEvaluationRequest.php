<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Retrieves a specific Evaluation.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.GetEvaluationRequest</code>
 */
class GetEvaluationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the [Evaluation][google.cloud.documentai.v1.Evaluation] to get.
     * `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processorVersion}/evaluations/{evaluation}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. The resource name of the [Evaluation][google.cloud.documentai.v1.Evaluation] to get.
     *                     `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processorVersion}/evaluations/{evaluation}`
     *                     Please see {@see DocumentProcessorServiceClient::evaluationName()} for help formatting this field.
     *
     * @return \Google\Cloud\DocumentAI\V1\GetEvaluationRequest
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
     *           Required. The resource name of the [Evaluation][google.cloud.documentai.v1.Evaluation] to get.
     *           `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processorVersion}/evaluations/{evaluation}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentProcessorService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the [Evaluation][google.cloud.documentai.v1.Evaluation] to get.
     * `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processorVersion}/evaluations/{evaluation}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the [Evaluation][google.cloud.documentai.v1.Evaluation] to get.
     * `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processorVersion}/evaluations/{evaluation}`
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

