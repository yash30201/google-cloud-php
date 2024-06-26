<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tensorboard_service.proto

namespace Google\Cloud\AIPlatform\V1\ReadTensorboardUsageResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Per user usage data.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ReadTensorboardUsageResponse.PerUserUsageData</code>
 */
class PerUserUsageData extends \Google\Protobuf\Internal\Message
{
    /**
     * User's username
     *
     * Generated from protobuf field <code>string username = 1;</code>
     */
    protected $username = '';
    /**
     * Number of times the user has read data within the Tensorboard.
     *
     * Generated from protobuf field <code>int64 view_count = 2;</code>
     */
    protected $view_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $username
     *           User's username
     *     @type int|string $view_count
     *           Number of times the user has read data within the Tensorboard.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TensorboardService::initOnce();
        parent::__construct($data);
    }

    /**
     * User's username
     *
     * Generated from protobuf field <code>string username = 1;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * User's username
     *
     * Generated from protobuf field <code>string username = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * Number of times the user has read data within the Tensorboard.
     *
     * Generated from protobuf field <code>int64 view_count = 2;</code>
     * @return int|string
     */
    public function getViewCount()
    {
        return $this->view_count;
    }

    /**
     * Number of times the user has read data within the Tensorboard.
     *
     * Generated from protobuf field <code>int64 view_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setViewCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->view_count = $var;

        return $this;
    }

}


