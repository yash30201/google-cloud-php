<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request object for `RollbackTarget`.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.RollbackTargetRequest</code>
 */
class RollbackTargetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The `DeliveryPipeline` for which the rollback `Rollout` should be
     * created. Format should be
     * `projects/{project_id}/locations/{location_name}/deliveryPipelines/{pipeline_name}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. ID of the `Target` that is being rolled back.
     *
     * Generated from protobuf field <code>string target_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $target_id = '';
    /**
     * Required. ID of the rollback `Rollout` to create.
     *
     * Generated from protobuf field <code>string rollout_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $rollout_id = '';
    /**
     * Optional. ID of the `Release` to roll back to. If this isn't specified, the
     * previous successful `Rollout` to the specified target will be used to
     * determine the `Release`.
     *
     * Generated from protobuf field <code>string release_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $release_id = '';
    /**
     * Optional. If provided, this must be the latest `Rollout` that is on the
     * `Target`.
     *
     * Generated from protobuf field <code>string rollout_to_roll_back = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $rollout_to_roll_back = '';
    /**
     * Optional. Configs for the rollback `Rollout`.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.RollbackTargetConfig rollback_config = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $rollback_config = null;
    /**
     * Optional. If set to true, the request is validated and the user is provided
     * with a `RollbackTargetResponse`.
     *
     * Generated from protobuf field <code>bool validate_only = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;

    /**
     * @param string $name      Required. The `DeliveryPipeline` for which the rollback `Rollout` should be
     *                          created. Format should be
     *                          `projects/{project_id}/locations/{location_name}/deliveryPipelines/{pipeline_name}`. Please see
     *                          {@see CloudDeployClient::deliveryPipelineName()} for help formatting this field.
     * @param string $targetId  Required. ID of the `Target` that is being rolled back.
     * @param string $rolloutId Required. ID of the rollback `Rollout` to create.
     *
     * @return \Google\Cloud\Deploy\V1\RollbackTargetRequest
     *
     * @experimental
     */
    public static function build(string $name, string $targetId, string $rolloutId): self
    {
        return (new self())
            ->setName($name)
            ->setTargetId($targetId)
            ->setRolloutId($rolloutId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The `DeliveryPipeline` for which the rollback `Rollout` should be
     *           created. Format should be
     *           `projects/{project_id}/locations/{location_name}/deliveryPipelines/{pipeline_name}`.
     *     @type string $target_id
     *           Required. ID of the `Target` that is being rolled back.
     *     @type string $rollout_id
     *           Required. ID of the rollback `Rollout` to create.
     *     @type string $release_id
     *           Optional. ID of the `Release` to roll back to. If this isn't specified, the
     *           previous successful `Rollout` to the specified target will be used to
     *           determine the `Release`.
     *     @type string $rollout_to_roll_back
     *           Optional. If provided, this must be the latest `Rollout` that is on the
     *           `Target`.
     *     @type \Google\Cloud\Deploy\V1\RollbackTargetConfig $rollback_config
     *           Optional. Configs for the rollback `Rollout`.
     *     @type bool $validate_only
     *           Optional. If set to true, the request is validated and the user is provided
     *           with a `RollbackTargetResponse`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The `DeliveryPipeline` for which the rollback `Rollout` should be
     * created. Format should be
     * `projects/{project_id}/locations/{location_name}/deliveryPipelines/{pipeline_name}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The `DeliveryPipeline` for which the rollback `Rollout` should be
     * created. Format should be
     * `projects/{project_id}/locations/{location_name}/deliveryPipelines/{pipeline_name}`.
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
     * Required. ID of the `Target` that is being rolled back.
     *
     * Generated from protobuf field <code>string target_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTargetId()
    {
        return $this->target_id;
    }

    /**
     * Required. ID of the `Target` that is being rolled back.
     *
     * Generated from protobuf field <code>string target_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTargetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_id = $var;

        return $this;
    }

    /**
     * Required. ID of the rollback `Rollout` to create.
     *
     * Generated from protobuf field <code>string rollout_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRolloutId()
    {
        return $this->rollout_id;
    }

    /**
     * Required. ID of the rollback `Rollout` to create.
     *
     * Generated from protobuf field <code>string rollout_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRolloutId($var)
    {
        GPBUtil::checkString($var, True);
        $this->rollout_id = $var;

        return $this;
    }

    /**
     * Optional. ID of the `Release` to roll back to. If this isn't specified, the
     * previous successful `Rollout` to the specified target will be used to
     * determine the `Release`.
     *
     * Generated from protobuf field <code>string release_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getReleaseId()
    {
        return $this->release_id;
    }

    /**
     * Optional. ID of the `Release` to roll back to. If this isn't specified, the
     * previous successful `Rollout` to the specified target will be used to
     * determine the `Release`.
     *
     * Generated from protobuf field <code>string release_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setReleaseId($var)
    {
        GPBUtil::checkString($var, True);
        $this->release_id = $var;

        return $this;
    }

    /**
     * Optional. If provided, this must be the latest `Rollout` that is on the
     * `Target`.
     *
     * Generated from protobuf field <code>string rollout_to_roll_back = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRolloutToRollBack()
    {
        return $this->rollout_to_roll_back;
    }

    /**
     * Optional. If provided, this must be the latest `Rollout` that is on the
     * `Target`.
     *
     * Generated from protobuf field <code>string rollout_to_roll_back = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRolloutToRollBack($var)
    {
        GPBUtil::checkString($var, True);
        $this->rollout_to_roll_back = $var;

        return $this;
    }

    /**
     * Optional. Configs for the rollback `Rollout`.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.RollbackTargetConfig rollback_config = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Deploy\V1\RollbackTargetConfig|null
     */
    public function getRollbackConfig()
    {
        return $this->rollback_config;
    }

    public function hasRollbackConfig()
    {
        return isset($this->rollback_config);
    }

    public function clearRollbackConfig()
    {
        unset($this->rollback_config);
    }

    /**
     * Optional. Configs for the rollback `Rollout`.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.RollbackTargetConfig rollback_config = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Deploy\V1\RollbackTargetConfig $var
     * @return $this
     */
    public function setRollbackConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\RollbackTargetConfig::class);
        $this->rollback_config = $var;

        return $this;
    }

    /**
     * Optional. If set to true, the request is validated and the user is provided
     * with a `RollbackTargetResponse`.
     *
     * Generated from protobuf field <code>bool validate_only = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. If set to true, the request is validated and the user is provided
     * with a `RollbackTargetResponse`.
     *
     * Generated from protobuf field <code>bool validate_only = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

