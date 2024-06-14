<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CutoverStep holds information about the cutover step progress.
 *
 * Generated from protobuf message <code>google.cloud.vmmigration.v1.CutoverStep</code>
 */
class CutoverStep extends \Google\Protobuf\Internal\Message
{
    /**
     * The time the step has started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     */
    protected $start_time = null;
    /**
     * The time the step has ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    protected $end_time = null;
    protected $step;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\VMMigration\V1\ReplicationCycle $previous_replication_cycle
     *           A replication cycle prior cutover step.
     *     @type \Google\Cloud\VMMigration\V1\ShuttingDownSourceVMStep $shutting_down_source_vm
     *           Shutting down VM step.
     *     @type \Google\Cloud\VMMigration\V1\ReplicationCycle $final_sync
     *           Final sync step.
     *     @type \Google\Cloud\VMMigration\V1\PreparingVMDisksStep $preparing_vm_disks
     *           Preparing VM disks step.
     *     @type \Google\Cloud\VMMigration\V1\InstantiatingMigratedVMStep $instantiating_migrated_vm
     *           Instantiating migrated VM step.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           The time the step has started.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           The time the step has ended.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmmigration\V1\Vmmigration::initOnce();
        parent::__construct($data);
    }

    /**
     * A replication cycle prior cutover step.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ReplicationCycle previous_replication_cycle = 3;</code>
     * @return \Google\Cloud\VMMigration\V1\ReplicationCycle|null
     */
    public function getPreviousReplicationCycle()
    {
        return $this->readOneof(3);
    }

    public function hasPreviousReplicationCycle()
    {
        return $this->hasOneof(3);
    }

    /**
     * A replication cycle prior cutover step.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ReplicationCycle previous_replication_cycle = 3;</code>
     * @param \Google\Cloud\VMMigration\V1\ReplicationCycle $var
     * @return $this
     */
    public function setPreviousReplicationCycle($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\ReplicationCycle::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Shutting down VM step.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ShuttingDownSourceVMStep shutting_down_source_vm = 4;</code>
     * @return \Google\Cloud\VMMigration\V1\ShuttingDownSourceVMStep|null
     */
    public function getShuttingDownSourceVm()
    {
        return $this->readOneof(4);
    }

    public function hasShuttingDownSourceVm()
    {
        return $this->hasOneof(4);
    }

    /**
     * Shutting down VM step.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ShuttingDownSourceVMStep shutting_down_source_vm = 4;</code>
     * @param \Google\Cloud\VMMigration\V1\ShuttingDownSourceVMStep $var
     * @return $this
     */
    public function setShuttingDownSourceVm($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\ShuttingDownSourceVMStep::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Final sync step.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ReplicationCycle final_sync = 5;</code>
     * @return \Google\Cloud\VMMigration\V1\ReplicationCycle|null
     */
    public function getFinalSync()
    {
        return $this->readOneof(5);
    }

    public function hasFinalSync()
    {
        return $this->hasOneof(5);
    }

    /**
     * Final sync step.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ReplicationCycle final_sync = 5;</code>
     * @param \Google\Cloud\VMMigration\V1\ReplicationCycle $var
     * @return $this
     */
    public function setFinalSync($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\ReplicationCycle::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Preparing VM disks step.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.PreparingVMDisksStep preparing_vm_disks = 6;</code>
     * @return \Google\Cloud\VMMigration\V1\PreparingVMDisksStep|null
     */
    public function getPreparingVmDisks()
    {
        return $this->readOneof(6);
    }

    public function hasPreparingVmDisks()
    {
        return $this->hasOneof(6);
    }

    /**
     * Preparing VM disks step.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.PreparingVMDisksStep preparing_vm_disks = 6;</code>
     * @param \Google\Cloud\VMMigration\V1\PreparingVMDisksStep $var
     * @return $this
     */
    public function setPreparingVmDisks($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\PreparingVMDisksStep::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Instantiating migrated VM step.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.InstantiatingMigratedVMStep instantiating_migrated_vm = 7;</code>
     * @return \Google\Cloud\VMMigration\V1\InstantiatingMigratedVMStep|null
     */
    public function getInstantiatingMigratedVm()
    {
        return $this->readOneof(7);
    }

    public function hasInstantiatingMigratedVm()
    {
        return $this->hasOneof(7);
    }

    /**
     * Instantiating migrated VM step.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.InstantiatingMigratedVMStep instantiating_migrated_vm = 7;</code>
     * @param \Google\Cloud\VMMigration\V1\InstantiatingMigratedVMStep $var
     * @return $this
     */
    public function setInstantiatingMigratedVm($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\InstantiatingMigratedVMStep::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * The time the step has started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
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
     * The time the step has started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
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
     * The time the step has ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
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
     * The time the step has ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
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
     * @return string
     */
    public function getStep()
    {
        return $this->whichOneof("step");
    }

}

