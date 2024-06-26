<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/migration_service.proto

namespace Google\Cloud\AIPlatform\V1\MigrateResourceRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Config for migrating Model in automl.googleapis.com to Vertex AI's Model.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.MigrateResourceRequest.MigrateAutomlModelConfig</code>
 */
class MigrateAutomlModelConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Full resource name of automl Model.
     * Format:
     * `projects/{project}/locations/{location}/models/{model}`.
     *
     * Generated from protobuf field <code>string model = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $model = '';
    /**
     * Optional. Display name of the model in Vertex AI.
     * System will pick a display name if unspecified.
     *
     * Generated from protobuf field <code>string model_display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $model_display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $model
     *           Required. Full resource name of automl Model.
     *           Format:
     *           `projects/{project}/locations/{location}/models/{model}`.
     *     @type string $model_display_name
     *           Optional. Display name of the model in Vertex AI.
     *           System will pick a display name if unspecified.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MigrationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Full resource name of automl Model.
     * Format:
     * `projects/{project}/locations/{location}/models/{model}`.
     *
     * Generated from protobuf field <code>string model = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Required. Full resource name of automl Model.
     * Format:
     * `projects/{project}/locations/{location}/models/{model}`.
     *
     * Generated from protobuf field <code>string model = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Optional. Display name of the model in Vertex AI.
     * System will pick a display name if unspecified.
     *
     * Generated from protobuf field <code>string model_display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getModelDisplayName()
    {
        return $this->model_display_name;
    }

    /**
     * Optional. Display name of the model in Vertex AI.
     * System will pick a display name if unspecified.
     *
     * Generated from protobuf field <code>string model_display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setModelDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_display_name = $var;

        return $this;
    }

}


