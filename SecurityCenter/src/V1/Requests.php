<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/cloud_armor.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about the requests relevant to the finding.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.Requests</code>
 */
class Requests extends \Google\Protobuf\Internal\Message
{
    /**
     * For 'Increasing deny ratio', the ratio is the denied traffic divided by the
     * allowed traffic. For 'Allowed traffic spike', the ratio is the allowed
     * traffic in the short term divided by allowed traffic in the long term.
     *
     * Generated from protobuf field <code>double ratio = 1;</code>
     */
    private $ratio = 0.0;
    /**
     * Allowed RPS (requests per second) in the short term.
     *
     * Generated from protobuf field <code>int32 short_term_allowed = 2;</code>
     */
    private $short_term_allowed = 0;
    /**
     * Allowed RPS (requests per second) over the long term.
     *
     * Generated from protobuf field <code>int32 long_term_allowed = 3;</code>
     */
    private $long_term_allowed = 0;
    /**
     * Denied RPS (requests per second) over the long term.
     *
     * Generated from protobuf field <code>int32 long_term_denied = 4;</code>
     */
    private $long_term_denied = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $ratio
     *           For 'Increasing deny ratio', the ratio is the denied traffic divided by the
     *           allowed traffic. For 'Allowed traffic spike', the ratio is the allowed
     *           traffic in the short term divided by allowed traffic in the long term.
     *     @type int $short_term_allowed
     *           Allowed RPS (requests per second) in the short term.
     *     @type int $long_term_allowed
     *           Allowed RPS (requests per second) over the long term.
     *     @type int $long_term_denied
     *           Denied RPS (requests per second) over the long term.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\CloudArmor::initOnce();
        parent::__construct($data);
    }

    /**
     * For 'Increasing deny ratio', the ratio is the denied traffic divided by the
     * allowed traffic. For 'Allowed traffic spike', the ratio is the allowed
     * traffic in the short term divided by allowed traffic in the long term.
     *
     * Generated from protobuf field <code>double ratio = 1;</code>
     * @return float
     */
    public function getRatio()
    {
        return $this->ratio;
    }

    /**
     * For 'Increasing deny ratio', the ratio is the denied traffic divided by the
     * allowed traffic. For 'Allowed traffic spike', the ratio is the allowed
     * traffic in the short term divided by allowed traffic in the long term.
     *
     * Generated from protobuf field <code>double ratio = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setRatio($var)
    {
        GPBUtil::checkDouble($var);
        $this->ratio = $var;

        return $this;
    }

    /**
     * Allowed RPS (requests per second) in the short term.
     *
     * Generated from protobuf field <code>int32 short_term_allowed = 2;</code>
     * @return int
     */
    public function getShortTermAllowed()
    {
        return $this->short_term_allowed;
    }

    /**
     * Allowed RPS (requests per second) in the short term.
     *
     * Generated from protobuf field <code>int32 short_term_allowed = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setShortTermAllowed($var)
    {
        GPBUtil::checkInt32($var);
        $this->short_term_allowed = $var;

        return $this;
    }

    /**
     * Allowed RPS (requests per second) over the long term.
     *
     * Generated from protobuf field <code>int32 long_term_allowed = 3;</code>
     * @return int
     */
    public function getLongTermAllowed()
    {
        return $this->long_term_allowed;
    }

    /**
     * Allowed RPS (requests per second) over the long term.
     *
     * Generated from protobuf field <code>int32 long_term_allowed = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLongTermAllowed($var)
    {
        GPBUtil::checkInt32($var);
        $this->long_term_allowed = $var;

        return $this;
    }

    /**
     * Denied RPS (requests per second) over the long term.
     *
     * Generated from protobuf field <code>int32 long_term_denied = 4;</code>
     * @return int
     */
    public function getLongTermDenied()
    {
        return $this->long_term_denied;
    }

    /**
     * Denied RPS (requests per second) over the long term.
     *
     * Generated from protobuf field <code>int32 long_term_denied = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLongTermDenied($var)
    {
        GPBUtil::checkInt32($var);
        $this->long_term_denied = $var;

        return $this;
    }

}

