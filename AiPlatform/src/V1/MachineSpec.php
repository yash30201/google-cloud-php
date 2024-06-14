<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/machine_resources.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specification of a single machine.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.MachineSpec</code>
 */
class MachineSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The type of the machine.
     * See the [list of machine types supported for
     * prediction](https://cloud.google.com/vertex-ai/docs/predictions/configure-compute#machine-types)
     * See the [list of machine types supported for custom
     * training](https://cloud.google.com/vertex-ai/docs/training/configure-compute#machine-types).
     * For [DeployedModel][google.cloud.aiplatform.v1.DeployedModel] this field is
     * optional, and the default value is `n1-standard-2`. For
     * [BatchPredictionJob][google.cloud.aiplatform.v1.BatchPredictionJob] or as
     * part of [WorkerPoolSpec][google.cloud.aiplatform.v1.WorkerPoolSpec] this
     * field is required.
     *
     * Generated from protobuf field <code>string machine_type = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $machine_type = '';
    /**
     * Immutable. The type of accelerator(s) that may be attached to the machine
     * as per
     * [accelerator_count][google.cloud.aiplatform.v1.MachineSpec.accelerator_count].
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.AcceleratorType accelerator_type = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $accelerator_type = 0;
    /**
     * The number of accelerators to attach to the machine.
     *
     * Generated from protobuf field <code>int32 accelerator_count = 3;</code>
     */
    protected $accelerator_count = 0;
    /**
     * Immutable. The topology of the TPUs. Corresponds to the TPU topologies
     * available from GKE. (Example: tpu_topology: "2x2x1").
     *
     * Generated from protobuf field <code>string tpu_topology = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $tpu_topology = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $machine_type
     *           Immutable. The type of the machine.
     *           See the [list of machine types supported for
     *           prediction](https://cloud.google.com/vertex-ai/docs/predictions/configure-compute#machine-types)
     *           See the [list of machine types supported for custom
     *           training](https://cloud.google.com/vertex-ai/docs/training/configure-compute#machine-types).
     *           For [DeployedModel][google.cloud.aiplatform.v1.DeployedModel] this field is
     *           optional, and the default value is `n1-standard-2`. For
     *           [BatchPredictionJob][google.cloud.aiplatform.v1.BatchPredictionJob] or as
     *           part of [WorkerPoolSpec][google.cloud.aiplatform.v1.WorkerPoolSpec] this
     *           field is required.
     *     @type int $accelerator_type
     *           Immutable. The type of accelerator(s) that may be attached to the machine
     *           as per
     *           [accelerator_count][google.cloud.aiplatform.v1.MachineSpec.accelerator_count].
     *     @type int $accelerator_count
     *           The number of accelerators to attach to the machine.
     *     @type string $tpu_topology
     *           Immutable. The topology of the TPUs. Corresponds to the TPU topologies
     *           available from GKE. (Example: tpu_topology: "2x2x1").
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MachineResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The type of the machine.
     * See the [list of machine types supported for
     * prediction](https://cloud.google.com/vertex-ai/docs/predictions/configure-compute#machine-types)
     * See the [list of machine types supported for custom
     * training](https://cloud.google.com/vertex-ai/docs/training/configure-compute#machine-types).
     * For [DeployedModel][google.cloud.aiplatform.v1.DeployedModel] this field is
     * optional, and the default value is `n1-standard-2`. For
     * [BatchPredictionJob][google.cloud.aiplatform.v1.BatchPredictionJob] or as
     * part of [WorkerPoolSpec][google.cloud.aiplatform.v1.WorkerPoolSpec] this
     * field is required.
     *
     * Generated from protobuf field <code>string machine_type = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getMachineType()
    {
        return $this->machine_type;
    }

    /**
     * Immutable. The type of the machine.
     * See the [list of machine types supported for
     * prediction](https://cloud.google.com/vertex-ai/docs/predictions/configure-compute#machine-types)
     * See the [list of machine types supported for custom
     * training](https://cloud.google.com/vertex-ai/docs/training/configure-compute#machine-types).
     * For [DeployedModel][google.cloud.aiplatform.v1.DeployedModel] this field is
     * optional, and the default value is `n1-standard-2`. For
     * [BatchPredictionJob][google.cloud.aiplatform.v1.BatchPredictionJob] or as
     * part of [WorkerPoolSpec][google.cloud.aiplatform.v1.WorkerPoolSpec] this
     * field is required.
     *
     * Generated from protobuf field <code>string machine_type = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setMachineType($var)
    {
        GPBUtil::checkString($var, True);
        $this->machine_type = $var;

        return $this;
    }

    /**
     * Immutable. The type of accelerator(s) that may be attached to the machine
     * as per
     * [accelerator_count][google.cloud.aiplatform.v1.MachineSpec.accelerator_count].
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.AcceleratorType accelerator_type = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getAcceleratorType()
    {
        return $this->accelerator_type;
    }

    /**
     * Immutable. The type of accelerator(s) that may be attached to the machine
     * as per
     * [accelerator_count][google.cloud.aiplatform.v1.MachineSpec.accelerator_count].
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.AcceleratorType accelerator_type = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setAcceleratorType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\AcceleratorType::class);
        $this->accelerator_type = $var;

        return $this;
    }

    /**
     * The number of accelerators to attach to the machine.
     *
     * Generated from protobuf field <code>int32 accelerator_count = 3;</code>
     * @return int
     */
    public function getAcceleratorCount()
    {
        return $this->accelerator_count;
    }

    /**
     * The number of accelerators to attach to the machine.
     *
     * Generated from protobuf field <code>int32 accelerator_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAcceleratorCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->accelerator_count = $var;

        return $this;
    }

    /**
     * Immutable. The topology of the TPUs. Corresponds to the TPU topologies
     * available from GKE. (Example: tpu_topology: "2x2x1").
     *
     * Generated from protobuf field <code>string tpu_topology = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getTpuTopology()
    {
        return $this->tpu_topology;
    }

    /**
     * Immutable. The topology of the TPUs. Corresponds to the TPU topologies
     * available from GKE. (Example: tpu_topology: "2x2x1").
     *
     * Generated from protobuf field <code>string tpu_topology = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setTpuTopology($var)
    {
        GPBUtil::checkString($var, True);
        $this->tpu_topology = $var;

        return $this;
    }

}

