<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model.proto

namespace Google\Cloud\AIPlatform\V1\Model;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains information about the original Model if this Model is a copy.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Model.OriginalModelInfo</code>
 */
class OriginalModelInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the Model this Model is a copy of,
     * including the revision. Format:
     * `projects/{project}/locations/{location}/models/{model_id}&#64;{version_id}`
     *
     * Generated from protobuf field <code>string model = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $model = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $model
     *           Output only. The resource name of the Model this Model is a copy of,
     *           including the revision. Format:
     *           `projects/{project}/locations/{location}/models/{model_id}&#64;{version_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Model::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the Model this Model is a copy of,
     * including the revision. Format:
     * `projects/{project}/locations/{location}/models/{model_id}&#64;{version_id}`
     *
     * Generated from protobuf field <code>string model = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Output only. The resource name of the Model this Model is a copy of,
     * including the revision. Format:
     * `projects/{project}/locations/{location}/models/{model_id}&#64;{version_id}`
     *
     * Generated from protobuf field <code>string model = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->model = $var;

        return $this;
    }

}


