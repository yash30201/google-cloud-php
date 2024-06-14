<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/machine_resources.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The metric specification that defines the target resource utilization
 * (CPU utilization, accelerator's duty cycle, and so on) for calculating the
 * desired replica count.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.AutoscalingMetricSpec</code>
 */
class AutoscalingMetricSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource metric name.
     * Supported metrics:
     * * For Online Prediction:
     * * `aiplatform.googleapis.com/prediction/online/accelerator/duty_cycle`
     * * `aiplatform.googleapis.com/prediction/online/cpu/utilization`
     *
     * Generated from protobuf field <code>string metric_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $metric_name = '';
    /**
     * The target resource utilization in percentage (1% - 100%) for the given
     * metric; once the real usage deviates from the target by a certain
     * percentage, the machine replicas change. The default value is 60
     * (representing 60%) if not provided.
     *
     * Generated from protobuf field <code>int32 target = 2;</code>
     */
    protected $target = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $metric_name
     *           Required. The resource metric name.
     *           Supported metrics:
     *           * For Online Prediction:
     *           * `aiplatform.googleapis.com/prediction/online/accelerator/duty_cycle`
     *           * `aiplatform.googleapis.com/prediction/online/cpu/utilization`
     *     @type int $target
     *           The target resource utilization in percentage (1% - 100%) for the given
     *           metric; once the real usage deviates from the target by a certain
     *           percentage, the machine replicas change. The default value is 60
     *           (representing 60%) if not provided.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MachineResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource metric name.
     * Supported metrics:
     * * For Online Prediction:
     * * `aiplatform.googleapis.com/prediction/online/accelerator/duty_cycle`
     * * `aiplatform.googleapis.com/prediction/online/cpu/utilization`
     *
     * Generated from protobuf field <code>string metric_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getMetricName()
    {
        return $this->metric_name;
    }

    /**
     * Required. The resource metric name.
     * Supported metrics:
     * * For Online Prediction:
     * * `aiplatform.googleapis.com/prediction/online/accelerator/duty_cycle`
     * * `aiplatform.googleapis.com/prediction/online/cpu/utilization`
     *
     * Generated from protobuf field <code>string metric_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setMetricName($var)
    {
        GPBUtil::checkString($var, True);
        $this->metric_name = $var;

        return $this;
    }

    /**
     * The target resource utilization in percentage (1% - 100%) for the given
     * metric; once the real usage deviates from the target by a certain
     * percentage, the machine replicas change. The default value is 60
     * (representing 60%) if not provided.
     *
     * Generated from protobuf field <code>int32 target = 2;</code>
     * @return int
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * The target resource utilization in percentage (1% - 100%) for the given
     * metric; once the real usage deviates from the target by a certain
     * percentage, the machine replicas change. The default value is 60
     * (representing 60%) if not provided.
     *
     * Generated from protobuf field <code>int32 target = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkInt32($var);
        $this->target = $var;

        return $this;
    }

}

