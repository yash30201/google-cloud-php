<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedkafka/v1/resources.proto

namespace Google\Cloud\ManagedKafka\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines rebalancing behavior of a Kafka cluster.
 *
 * Generated from protobuf message <code>google.cloud.managedkafka.v1.RebalanceConfig</code>
 */
class RebalanceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The rebalance behavior for the cluster.
     * When not specified, defaults to `NO_REBALANCE`.
     *
     * Generated from protobuf field <code>.google.cloud.managedkafka.v1.RebalanceConfig.Mode mode = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $mode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $mode
     *           Optional. The rebalance behavior for the cluster.
     *           When not specified, defaults to `NO_REBALANCE`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Managedkafka\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The rebalance behavior for the cluster.
     * When not specified, defaults to `NO_REBALANCE`.
     *
     * Generated from protobuf field <code>.google.cloud.managedkafka.v1.RebalanceConfig.Mode mode = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Optional. The rebalance behavior for the cluster.
     * When not specified, defaults to `NO_REBALANCE`.
     *
     * Generated from protobuf field <code>.google.cloud.managedkafka.v1.RebalanceConfig.Mode mode = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ManagedKafka\V1\RebalanceConfig\Mode::class);
        $this->mode = $var;

        return $this;
    }

}

