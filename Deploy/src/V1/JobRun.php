<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A `JobRun` resource in the Cloud Deploy API.
 * A `JobRun` contains information of a single `Rollout` job evaluation.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.JobRun</code>
 */
class JobRun extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Name of the `JobRun`. Format is
     * `projects/{project}/locations/{location}/deliveryPipelines/{deliveryPipeline}/releases/{releases}/rollouts/{rollouts}/jobRuns/{uuid}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $name = '';
    /**
     * Output only. Unique identifier of the `JobRun`.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Output only. ID of the `Rollout` phase this `JobRun` belongs in.
     *
     * Generated from protobuf field <code>string phase_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $phase_id = '';
    /**
     * Output only. ID of the `Rollout` job this `JobRun` corresponds to.
     *
     * Generated from protobuf field <code>string job_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $job_id = '';
    /**
     * Output only. Time at which the `JobRun` was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Time at which the `JobRun` was started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $start_time = null;
    /**
     * Output only. Time at which the `JobRun` ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $end_time = null;
    /**
     * Output only. The current state of the `JobRun`.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.JobRun.State state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. This checksum is computed by the server based on the value of
     * other fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $etag = '';
    protected $job_run;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Optional. Name of the `JobRun`. Format is
     *           `projects/{project}/locations/{location}/deliveryPipelines/{deliveryPipeline}/releases/{releases}/rollouts/{rollouts}/jobRuns/{uuid}`.
     *     @type string $uid
     *           Output only. Unique identifier of the `JobRun`.
     *     @type string $phase_id
     *           Output only. ID of the `Rollout` phase this `JobRun` belongs in.
     *     @type string $job_id
     *           Output only. ID of the `Rollout` job this `JobRun` corresponds to.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time at which the `JobRun` was created.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Output only. Time at which the `JobRun` was started.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Output only. Time at which the `JobRun` ended.
     *     @type int $state
     *           Output only. The current state of the `JobRun`.
     *     @type \Google\Cloud\Deploy\V1\DeployJobRun $deploy_job_run
     *           Output only. Information specific to a deploy `JobRun`.
     *     @type \Google\Cloud\Deploy\V1\VerifyJobRun $verify_job_run
     *           Output only. Information specific to a verify `JobRun`.
     *     @type \Google\Cloud\Deploy\V1\PredeployJobRun $predeploy_job_run
     *           Output only. Information specific to a predeploy `JobRun`.
     *     @type \Google\Cloud\Deploy\V1\PostdeployJobRun $postdeploy_job_run
     *           Output only. Information specific to a postdeploy `JobRun`.
     *     @type \Google\Cloud\Deploy\V1\CreateChildRolloutJobRun $create_child_rollout_job_run
     *           Output only. Information specific to a createChildRollout `JobRun`.
     *     @type \Google\Cloud\Deploy\V1\AdvanceChildRolloutJobRun $advance_child_rollout_job_run
     *           Output only. Information specific to an advanceChildRollout `JobRun`
     *     @type string $etag
     *           Output only. This checksum is computed by the server based on the value of
     *           other fields, and may be sent on update and delete requests to ensure the
     *           client has an up-to-date value before proceeding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Name of the `JobRun`. Format is
     * `projects/{project}/locations/{location}/deliveryPipelines/{deliveryPipeline}/releases/{releases}/rollouts/{rollouts}/jobRuns/{uuid}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional. Name of the `JobRun`. Format is
     * `projects/{project}/locations/{location}/deliveryPipelines/{deliveryPipeline}/releases/{releases}/rollouts/{rollouts}/jobRuns/{uuid}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Output only. Unique identifier of the `JobRun`.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. Unique identifier of the `JobRun`.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Output only. ID of the `Rollout` phase this `JobRun` belongs in.
     *
     * Generated from protobuf field <code>string phase_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPhaseId()
    {
        return $this->phase_id;
    }

    /**
     * Output only. ID of the `Rollout` phase this `JobRun` belongs in.
     *
     * Generated from protobuf field <code>string phase_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPhaseId($var)
    {
        GPBUtil::checkString($var, True);
        $this->phase_id = $var;

        return $this;
    }

    /**
     * Output only. ID of the `Rollout` job this `JobRun` corresponds to.
     *
     * Generated from protobuf field <code>string job_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * Output only. ID of the `Rollout` job this `JobRun` corresponds to.
     *
     * Generated from protobuf field <code>string job_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setJobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_id = $var;

        return $this;
    }

    /**
     * Output only. Time at which the `JobRun` was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Time at which the `JobRun` was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Time at which the `JobRun` was started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Output only. Time at which the `JobRun` was started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Output only. Time at which the `JobRun` ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Output only. Time at which the `JobRun` ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Output only. The current state of the `JobRun`.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.JobRun.State state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current state of the `JobRun`.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.JobRun.State state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Deploy\V1\JobRun\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Information specific to a deploy `JobRun`.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.DeployJobRun deploy_job_run = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Deploy\V1\DeployJobRun|null
     */
    public function getDeployJobRun()
    {
        return $this->readOneof(9);
    }

    public function hasDeployJobRun()
    {
        return $this->hasOneof(9);
    }

    /**
     * Output only. Information specific to a deploy `JobRun`.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.DeployJobRun deploy_job_run = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Deploy\V1\DeployJobRun $var
     * @return $this
     */
    public function setDeployJobRun($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\DeployJobRun::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Output only. Information specific to a verify `JobRun`.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.VerifyJobRun verify_job_run = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Deploy\V1\VerifyJobRun|null
     */
    public function getVerifyJobRun()
    {
        return $this->readOneof(10);
    }

    public function hasVerifyJobRun()
    {
        return $this->hasOneof(10);
    }

    /**
     * Output only. Information specific to a verify `JobRun`.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.VerifyJobRun verify_job_run = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Deploy\V1\VerifyJobRun $var
     * @return $this
     */
    public function setVerifyJobRun($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\VerifyJobRun::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Output only. Information specific to a predeploy `JobRun`.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.PredeployJobRun predeploy_job_run = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Deploy\V1\PredeployJobRun|null
     */
    public function getPredeployJobRun()
    {
        return $this->readOneof(14);
    }

    public function hasPredeployJobRun()
    {
        return $this->hasOneof(14);
    }

    /**
     * Output only. Information specific to a predeploy `JobRun`.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.PredeployJobRun predeploy_job_run = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Deploy\V1\PredeployJobRun $var
     * @return $this
     */
    public function setPredeployJobRun($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\PredeployJobRun::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Output only. Information specific to a postdeploy `JobRun`.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.PostdeployJobRun postdeploy_job_run = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Deploy\V1\PostdeployJobRun|null
     */
    public function getPostdeployJobRun()
    {
        return $this->readOneof(15);
    }

    public function hasPostdeployJobRun()
    {
        return $this->hasOneof(15);
    }

    /**
     * Output only. Information specific to a postdeploy `JobRun`.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.PostdeployJobRun postdeploy_job_run = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Deploy\V1\PostdeployJobRun $var
     * @return $this
     */
    public function setPostdeployJobRun($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\PostdeployJobRun::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Output only. Information specific to a createChildRollout `JobRun`.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.CreateChildRolloutJobRun create_child_rollout_job_run = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Deploy\V1\CreateChildRolloutJobRun|null
     */
    public function getCreateChildRolloutJobRun()
    {
        return $this->readOneof(12);
    }

    public function hasCreateChildRolloutJobRun()
    {
        return $this->hasOneof(12);
    }

    /**
     * Output only. Information specific to a createChildRollout `JobRun`.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.CreateChildRolloutJobRun create_child_rollout_job_run = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Deploy\V1\CreateChildRolloutJobRun $var
     * @return $this
     */
    public function setCreateChildRolloutJobRun($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\CreateChildRolloutJobRun::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Output only. Information specific to an advanceChildRollout `JobRun`
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.AdvanceChildRolloutJobRun advance_child_rollout_job_run = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Deploy\V1\AdvanceChildRolloutJobRun|null
     */
    public function getAdvanceChildRolloutJobRun()
    {
        return $this->readOneof(13);
    }

    public function hasAdvanceChildRolloutJobRun()
    {
        return $this->hasOneof(13);
    }

    /**
     * Output only. Information specific to an advanceChildRollout `JobRun`
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.AdvanceChildRolloutJobRun advance_child_rollout_job_run = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Deploy\V1\AdvanceChildRolloutJobRun $var
     * @return $this
     */
    public function setAdvanceChildRolloutJobRun($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\AdvanceChildRolloutJobRun::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Output only. This checksum is computed by the server based on the value of
     * other fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Output only. This checksum is computed by the server based on the value of
     * other fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getJobRun()
    {
        return $this->whichOneof("job_run");
    }

}

