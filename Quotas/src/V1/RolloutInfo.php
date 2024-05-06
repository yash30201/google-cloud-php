<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/cloudquotas/v1/resources.proto

namespace Google\Cloud\CloudQuotas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * [Output only] Rollout information of a quota.
 *
 * Generated from protobuf message <code>google.api.cloudquotas.v1.RolloutInfo</code>
 */
class RolloutInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether there is an ongoing rollout for a quota or not.
     *
     * Generated from protobuf field <code>bool ongoing_rollout = 1;</code>
     */
    protected $ongoing_rollout = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $ongoing_rollout
     *           Whether there is an ongoing rollout for a quota or not.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Cloudquotas\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether there is an ongoing rollout for a quota or not.
     *
     * Generated from protobuf field <code>bool ongoing_rollout = 1;</code>
     * @return bool
     */
    public function getOngoingRollout()
    {
        return $this->ongoing_rollout;
    }

    /**
     * Whether there is an ongoing rollout for a quota or not.
     *
     * Generated from protobuf field <code>bool ongoing_rollout = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setOngoingRollout($var)
    {
        GPBUtil::checkBool($var);
        $this->ongoing_rollout = $var;

        return $this;
    }

}

