<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/batch/v1/task.proto

namespace Google\Cloud\Batch\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Spec of a task
 *
 * Generated from protobuf message <code>google.cloud.batch.v1.TaskSpec</code>
 */
class TaskSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * The sequence of scripts or containers to run for this Task. Each Task using
     * this TaskSpec executes its list of runnables in order. The Task succeeds if
     * all of its runnables either exit with a zero status or any that exit with a
     * non-zero status have the ignore_exit_status flag.
     * Background runnables are killed automatically (if they have not already
     * exited) a short time after all foreground runnables have completed. Even
     * though this is likely to result in a non-zero exit status for the
     * background runnable, these automatic kills are not treated as Task
     * failures.
     *
     * Generated from protobuf field <code>repeated .google.cloud.batch.v1.Runnable runnables = 8;</code>
     */
    private $runnables;
    /**
     * ComputeResource requirements.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.ComputeResource compute_resource = 3;</code>
     */
    private $compute_resource = null;
    /**
     * Maximum duration the task should run.
     * The task will be killed and marked as FAILED if over this limit.
     * The valid value range for max_run_duration in seconds is [0,
     * 315576000000.999999999],
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_run_duration = 4;</code>
     */
    private $max_run_duration = null;
    /**
     * Maximum number of retries on failures.
     * The default, 0, which means never retry.
     * The valid value range is [0, 10].
     *
     * Generated from protobuf field <code>int32 max_retry_count = 5;</code>
     */
    private $max_retry_count = 0;
    /**
     * Lifecycle management schema when any task in a task group is failed.
     * Currently we only support one lifecycle policy.
     * When the lifecycle policy condition is met,
     * the action in the policy will execute.
     * If task execution result does not meet with the defined lifecycle
     * policy, we consider it as the default policy.
     * Default policy means if the exit code is 0, exit task.
     * If task ends with non-zero exit code, retry the task with max_retry_count.
     *
     * Generated from protobuf field <code>repeated .google.cloud.batch.v1.LifecyclePolicy lifecycle_policies = 9;</code>
     */
    private $lifecycle_policies;
    /**
     * Deprecated: please use environment(non-plural) instead.
     *
     * Generated from protobuf field <code>map<string, string> environments = 6 [deprecated = true];</code>
     * @deprecated
     */
    private $environments;
    /**
     * Volumes to mount before running Tasks using this TaskSpec.
     *
     * Generated from protobuf field <code>repeated .google.cloud.batch.v1.Volume volumes = 7;</code>
     */
    private $volumes;
    /**
     * Environment variables to set before running the Task.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.Environment environment = 10;</code>
     */
    private $environment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Batch\V1\Runnable>|\Google\Protobuf\Internal\RepeatedField $runnables
     *           The sequence of scripts or containers to run for this Task. Each Task using
     *           this TaskSpec executes its list of runnables in order. The Task succeeds if
     *           all of its runnables either exit with a zero status or any that exit with a
     *           non-zero status have the ignore_exit_status flag.
     *           Background runnables are killed automatically (if they have not already
     *           exited) a short time after all foreground runnables have completed. Even
     *           though this is likely to result in a non-zero exit status for the
     *           background runnable, these automatic kills are not treated as Task
     *           failures.
     *     @type \Google\Cloud\Batch\V1\ComputeResource $compute_resource
     *           ComputeResource requirements.
     *     @type \Google\Protobuf\Duration $max_run_duration
     *           Maximum duration the task should run.
     *           The task will be killed and marked as FAILED if over this limit.
     *           The valid value range for max_run_duration in seconds is [0,
     *           315576000000.999999999],
     *     @type int $max_retry_count
     *           Maximum number of retries on failures.
     *           The default, 0, which means never retry.
     *           The valid value range is [0, 10].
     *     @type array<\Google\Cloud\Batch\V1\LifecyclePolicy>|\Google\Protobuf\Internal\RepeatedField $lifecycle_policies
     *           Lifecycle management schema when any task in a task group is failed.
     *           Currently we only support one lifecycle policy.
     *           When the lifecycle policy condition is met,
     *           the action in the policy will execute.
     *           If task execution result does not meet with the defined lifecycle
     *           policy, we consider it as the default policy.
     *           Default policy means if the exit code is 0, exit task.
     *           If task ends with non-zero exit code, retry the task with max_retry_count.
     *     @type array|\Google\Protobuf\Internal\MapField $environments
     *           Deprecated: please use environment(non-plural) instead.
     *     @type array<\Google\Cloud\Batch\V1\Volume>|\Google\Protobuf\Internal\RepeatedField $volumes
     *           Volumes to mount before running Tasks using this TaskSpec.
     *     @type \Google\Cloud\Batch\V1\Environment $environment
     *           Environment variables to set before running the Task.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Batch\V1\Task::initOnce();
        parent::__construct($data);
    }

    /**
     * The sequence of scripts or containers to run for this Task. Each Task using
     * this TaskSpec executes its list of runnables in order. The Task succeeds if
     * all of its runnables either exit with a zero status or any that exit with a
     * non-zero status have the ignore_exit_status flag.
     * Background runnables are killed automatically (if they have not already
     * exited) a short time after all foreground runnables have completed. Even
     * though this is likely to result in a non-zero exit status for the
     * background runnable, these automatic kills are not treated as Task
     * failures.
     *
     * Generated from protobuf field <code>repeated .google.cloud.batch.v1.Runnable runnables = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRunnables()
    {
        return $this->runnables;
    }

    /**
     * The sequence of scripts or containers to run for this Task. Each Task using
     * this TaskSpec executes its list of runnables in order. The Task succeeds if
     * all of its runnables either exit with a zero status or any that exit with a
     * non-zero status have the ignore_exit_status flag.
     * Background runnables are killed automatically (if they have not already
     * exited) a short time after all foreground runnables have completed. Even
     * though this is likely to result in a non-zero exit status for the
     * background runnable, these automatic kills are not treated as Task
     * failures.
     *
     * Generated from protobuf field <code>repeated .google.cloud.batch.v1.Runnable runnables = 8;</code>
     * @param array<\Google\Cloud\Batch\V1\Runnable>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRunnables($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Batch\V1\Runnable::class);
        $this->runnables = $arr;

        return $this;
    }

    /**
     * ComputeResource requirements.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.ComputeResource compute_resource = 3;</code>
     * @return \Google\Cloud\Batch\V1\ComputeResource|null
     */
    public function getComputeResource()
    {
        return $this->compute_resource;
    }

    public function hasComputeResource()
    {
        return isset($this->compute_resource);
    }

    public function clearComputeResource()
    {
        unset($this->compute_resource);
    }

    /**
     * ComputeResource requirements.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.ComputeResource compute_resource = 3;</code>
     * @param \Google\Cloud\Batch\V1\ComputeResource $var
     * @return $this
     */
    public function setComputeResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Batch\V1\ComputeResource::class);
        $this->compute_resource = $var;

        return $this;
    }

    /**
     * Maximum duration the task should run.
     * The task will be killed and marked as FAILED if over this limit.
     * The valid value range for max_run_duration in seconds is [0,
     * 315576000000.999999999],
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_run_duration = 4;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMaxRunDuration()
    {
        return $this->max_run_duration;
    }

    public function hasMaxRunDuration()
    {
        return isset($this->max_run_duration);
    }

    public function clearMaxRunDuration()
    {
        unset($this->max_run_duration);
    }

    /**
     * Maximum duration the task should run.
     * The task will be killed and marked as FAILED if over this limit.
     * The valid value range for max_run_duration in seconds is [0,
     * 315576000000.999999999],
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_run_duration = 4;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMaxRunDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->max_run_duration = $var;

        return $this;
    }

    /**
     * Maximum number of retries on failures.
     * The default, 0, which means never retry.
     * The valid value range is [0, 10].
     *
     * Generated from protobuf field <code>int32 max_retry_count = 5;</code>
     * @return int
     */
    public function getMaxRetryCount()
    {
        return $this->max_retry_count;
    }

    /**
     * Maximum number of retries on failures.
     * The default, 0, which means never retry.
     * The valid value range is [0, 10].
     *
     * Generated from protobuf field <code>int32 max_retry_count = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxRetryCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_retry_count = $var;

        return $this;
    }

    /**
     * Lifecycle management schema when any task in a task group is failed.
     * Currently we only support one lifecycle policy.
     * When the lifecycle policy condition is met,
     * the action in the policy will execute.
     * If task execution result does not meet with the defined lifecycle
     * policy, we consider it as the default policy.
     * Default policy means if the exit code is 0, exit task.
     * If task ends with non-zero exit code, retry the task with max_retry_count.
     *
     * Generated from protobuf field <code>repeated .google.cloud.batch.v1.LifecyclePolicy lifecycle_policies = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLifecyclePolicies()
    {
        return $this->lifecycle_policies;
    }

    /**
     * Lifecycle management schema when any task in a task group is failed.
     * Currently we only support one lifecycle policy.
     * When the lifecycle policy condition is met,
     * the action in the policy will execute.
     * If task execution result does not meet with the defined lifecycle
     * policy, we consider it as the default policy.
     * Default policy means if the exit code is 0, exit task.
     * If task ends with non-zero exit code, retry the task with max_retry_count.
     *
     * Generated from protobuf field <code>repeated .google.cloud.batch.v1.LifecyclePolicy lifecycle_policies = 9;</code>
     * @param array<\Google\Cloud\Batch\V1\LifecyclePolicy>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLifecyclePolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Batch\V1\LifecyclePolicy::class);
        $this->lifecycle_policies = $arr;

        return $this;
    }

    /**
     * Deprecated: please use environment(non-plural) instead.
     *
     * Generated from protobuf field <code>map<string, string> environments = 6 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\MapField
     * @deprecated
     */
    public function getEnvironments()
    {
        @trigger_error('environments is deprecated.', E_USER_DEPRECATED);
        return $this->environments;
    }

    /**
     * Deprecated: please use environment(non-plural) instead.
     *
     * Generated from protobuf field <code>map<string, string> environments = 6 [deprecated = true];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     * @deprecated
     */
    public function setEnvironments($var)
    {
        @trigger_error('environments is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->environments = $arr;

        return $this;
    }

    /**
     * Volumes to mount before running Tasks using this TaskSpec.
     *
     * Generated from protobuf field <code>repeated .google.cloud.batch.v1.Volume volumes = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVolumes()
    {
        return $this->volumes;
    }

    /**
     * Volumes to mount before running Tasks using this TaskSpec.
     *
     * Generated from protobuf field <code>repeated .google.cloud.batch.v1.Volume volumes = 7;</code>
     * @param array<\Google\Cloud\Batch\V1\Volume>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVolumes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Batch\V1\Volume::class);
        $this->volumes = $arr;

        return $this;
    }

    /**
     * Environment variables to set before running the Task.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.Environment environment = 10;</code>
     * @return \Google\Cloud\Batch\V1\Environment|null
     */
    public function getEnvironment()
    {
        return $this->environment;
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
     * Environment variables to set before running the Task.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.Environment environment = 10;</code>
     * @param \Google\Cloud\Batch\V1\Environment $var
     * @return $this
     */
    public function setEnvironment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Batch\V1\Environment::class);
        $this->environment = $var;

        return $this;
    }

}

