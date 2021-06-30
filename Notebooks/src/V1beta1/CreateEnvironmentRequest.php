<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1beta1/service.proto

namespace Google\Cloud\Notebooks\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for creating a notebook environment.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v1beta1.CreateEnvironmentRequest</code>
 */
class CreateEnvironmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Format: `projects/{project_id}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $parent = '';
    /**
     * Required. User-defined unique ID of this environment. The `environment_id`
     * must be 1 to 63 characters long and contain only lowercase letters, numeric
     * characters, and dashes. The first character must be a lowercase letter and
     * the last character cannot be a dash.
     *
     * Generated from protobuf field <code>string environment_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $environment_id = '';
    /**
     * Required. The environment to be created.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1beta1.Environment environment = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $environment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Format: `projects/{project_id}/locations/{location}`
     *     @type string $environment_id
     *           Required. User-defined unique ID of this environment. The `environment_id`
     *           must be 1 to 63 characters long and contain only lowercase letters, numeric
     *           characters, and dashes. The first character must be a lowercase letter and
     *           the last character cannot be a dash.
     *     @type \Google\Cloud\Notebooks\V1beta1\Environment $environment
     *           Required. The environment to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V1Beta1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Format: `projects/{project_id}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Format: `projects/{project_id}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. User-defined unique ID of this environment. The `environment_id`
     * must be 1 to 63 characters long and contain only lowercase letters, numeric
     * characters, and dashes. The first character must be a lowercase letter and
     * the last character cannot be a dash.
     *
     * Generated from protobuf field <code>string environment_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getEnvironmentId()
    {
        return $this->environment_id;
    }

    /**
     * Required. User-defined unique ID of this environment. The `environment_id`
     * must be 1 to 63 characters long and contain only lowercase letters, numeric
     * characters, and dashes. The first character must be a lowercase letter and
     * the last character cannot be a dash.
     *
     * Generated from protobuf field <code>string environment_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setEnvironmentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->environment_id = $var;

        return $this;
    }

    /**
     * Required. The environment to be created.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1beta1.Environment environment = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Notebooks\V1beta1\Environment|null
     */
    public function getEnvironment()
    {
        return isset($this->environment) ? $this->environment : null;
    }

    public function hasEnvironment()
    {
        return isset($this->environment);
    }

    public function clearEnvironment()
    {
        unset($this->environment);
    }

    /**
     * Required. The environment to be created.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1beta1.Environment environment = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Notebooks\V1beta1\Environment $var
     * @return $this
     */
    public function setEnvironment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Notebooks\V1beta1\Environment::class);
        $this->environment = $var;

        return $this;
    }

}
