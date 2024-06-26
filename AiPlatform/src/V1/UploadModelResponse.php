<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message of
 * [ModelService.UploadModel][google.cloud.aiplatform.v1.ModelService.UploadModel]
 * operation.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.UploadModelResponse</code>
 */
class UploadModelResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the uploaded Model resource.
     * Format: `projects/{project}/locations/{location}/models/{model}`
     *
     * Generated from protobuf field <code>string model = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $model = '';
    /**
     * Output only. The version ID of the model that is uploaded.
     *
     * Generated from protobuf field <code>string model_version_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $model_version_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $model
     *           The name of the uploaded Model resource.
     *           Format: `projects/{project}/locations/{location}/models/{model}`
     *     @type string $model_version_id
     *           Output only. The version ID of the model that is uploaded.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelService::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the uploaded Model resource.
     * Format: `projects/{project}/locations/{location}/models/{model}`
     *
     * Generated from protobuf field <code>string model = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * The name of the uploaded Model resource.
     * Format: `projects/{project}/locations/{location}/models/{model}`
     *
     * Generated from protobuf field <code>string model = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->model = $var;

        return $this;
    }

    /**
     * Output only. The version ID of the model that is uploaded.
     *
     * Generated from protobuf field <code>string model_version_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getModelVersionId()
    {
        return $this->model_version_id;
    }

    /**
     * Output only. The version ID of the model that is uploaded.
     *
     * Generated from protobuf field <code>string model_version_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setModelVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_version_id = $var;

        return $this;
    }

}

