<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CreateRolloutRequest is the request object used by `CreateRollout`.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.CreateRolloutRequest</code>
 */
class CreateRolloutRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent collection in which the `Rollout` should be created.
     * Format should be
     * `projects/{project_id}/locations/{location_name}/deliveryPipelines/{pipeline_name}/releases/{release_name}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. ID of the `Rollout`.
     *
     * Generated from protobuf field <code>string rollout_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $rollout_id = '';
    /**
     * Required. The `Rollout` to create.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Rollout rollout = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $rollout = null;
    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server knows to ignore the
     * request if it has already been completed. The server guarantees that for
     * at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';
    /**
     * Optional. If set to true, the request is validated and the user is provided
     * with an expected result, but no actual change is made.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;
    /**
     * Optional. The starting phase ID for the `Rollout`. If empty the `Rollout`
     * will start at the first phase.
     *
     * Generated from protobuf field <code>string starting_phase_id = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $starting_phase_id = '';

    /**
     * @param string                          $parent    Required. The parent collection in which the `Rollout` should be created.
     *                                                   Format should be
     *                                                   `projects/{project_id}/locations/{location_name}/deliveryPipelines/{pipeline_name}/releases/{release_name}`. Please see
     *                                                   {@see CloudDeployClient::releaseName()} for help formatting this field.
     * @param \Google\Cloud\Deploy\V1\Rollout $rollout   Required. The `Rollout` to create.
     * @param string                          $rolloutId Required. ID of the `Rollout`.
     *
     * @return \Google\Cloud\Deploy\V1\CreateRolloutRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Deploy\V1\Rollout $rollout, string $rolloutId): self
    {
        return (new self())
            ->setParent($parent)
            ->setRollout($rollout)
            ->setRolloutId($rolloutId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent collection in which the `Rollout` should be created.
     *           Format should be
     *           `projects/{project_id}/locations/{location_name}/deliveryPipelines/{pipeline_name}/releases/{release_name}`.
     *     @type string $rollout_id
     *           Required. ID of the `Rollout`.
     *     @type \Google\Cloud\Deploy\V1\Rollout $rollout
     *           Required. The `Rollout` to create.
     *     @type string $request_id
     *           Optional. A request ID to identify requests. Specify a unique request ID
     *           so that if you must retry your request, the server knows to ignore the
     *           request if it has already been completed. The server guarantees that for
     *           at least 60 minutes after the first request.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request ID,
     *           the server can check if original operation with the same request ID was
     *           received, and if so, will ignore the second request. This prevents clients
     *           from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     *     @type bool $validate_only
     *           Optional. If set to true, the request is validated and the user is provided
     *           with an expected result, but no actual change is made.
     *     @type string $starting_phase_id
     *           Optional. The starting phase ID for the `Rollout`. If empty the `Rollout`
     *           will start at the first phase.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent collection in which the `Rollout` should be created.
     * Format should be
     * `projects/{project_id}/locations/{location_name}/deliveryPipelines/{pipeline_name}/releases/{release_name}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent collection in which the `Rollout` should be created.
     * Format should be
     * `projects/{project_id}/locations/{location_name}/deliveryPipelines/{pipeline_name}/releases/{release_name}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. ID of the `Rollout`.
     *
     * Generated from protobuf field <code>string rollout_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRolloutId()
    {
        return $this->rollout_id;
    }

    /**
     * Required. ID of the `Rollout`.
     *
     * Generated from protobuf field <code>string rollout_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The `Rollout` to create.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Rollout rollout = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Deploy\V1\Rollout|null
     */
    public function getRollout()
    {
        return $this->rollout;
    }

    public function hasRollout()
    {
        return isset($this->rollout);
    }

    public function clearRollout()
    {
        unset($this->rollout);
    }

    /**
     * Required. The `Rollout` to create.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Rollout rollout = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Deploy\V1\Rollout $var
     * @return $this
     */
    public function setRollout($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\Rollout::class);
        $this->rollout = $var;

        return $this;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server knows to ignore the
     * request if it has already been completed. The server guarantees that for
     * at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server knows to ignore the
     * request if it has already been completed. The server guarantees that for
     * at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Optional. If set to true, the request is validated and the user is provided
     * with an expected result, but no actual change is made.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. If set to true, the request is validated and the user is provided
     * with an expected result, but no actual change is made.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * Optional. The starting phase ID for the `Rollout`. If empty the `Rollout`
     * will start at the first phase.
     *
     * Generated from protobuf field <code>string starting_phase_id = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getStartingPhaseId()
    {
        return $this->starting_phase_id;
    }

    /**
     * Optional. The starting phase ID for the `Rollout`. If empty the `Rollout`
     * will start at the first phase.
     *
     * Generated from protobuf field <code>string starting_phase_id = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setStartingPhaseId($var)
    {
        GPBUtil::checkString($var, True);
        $this->starting_phase_id = $var;

        return $this;
    }

}

