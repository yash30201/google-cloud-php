<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/service_networking.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PscAutomatedEndpoints defines the output of the forwarding rule
 * automatically created by each PscAutomationConfig.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.PscAutomatedEndpoints</code>
 */
class PscAutomatedEndpoints extends \Google\Protobuf\Internal\Message
{
    /**
     * Corresponding project_id in pscAutomationConfigs
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    protected $project_id = '';
    /**
     * Corresponding network in pscAutomationConfigs.
     *
     * Generated from protobuf field <code>string network = 2;</code>
     */
    protected $network = '';
    /**
     * Ip Address created by the automated forwarding rule.
     *
     * Generated from protobuf field <code>string match_address = 3;</code>
     */
    protected $match_address = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Corresponding project_id in pscAutomationConfigs
     *     @type string $network
     *           Corresponding network in pscAutomationConfigs.
     *     @type string $match_address
     *           Ip Address created by the automated forwarding rule.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ServiceNetworking::initOnce();
        parent::__construct($data);
    }

    /**
     * Corresponding project_id in pscAutomationConfigs
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Corresponding project_id in pscAutomationConfigs
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Corresponding network in pscAutomationConfigs.
     *
     * Generated from protobuf field <code>string network = 2;</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Corresponding network in pscAutomationConfigs.
     *
     * Generated from protobuf field <code>string network = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Ip Address created by the automated forwarding rule.
     *
     * Generated from protobuf field <code>string match_address = 3;</code>
     * @return string
     */
    public function getMatchAddress()
    {
        return $this->match_address;
    }

    /**
     * Ip Address created by the automated forwarding rule.
     *
     * Generated from protobuf field <code>string match_address = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMatchAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->match_address = $var;

        return $this;
    }

}

