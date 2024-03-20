<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/cloudcontrolspartner/v1/violations.proto

namespace Google\Cloud\CloudControlsPartner\V1\Violation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents remediation guidance to resolve compliance violation for
 * AssuredWorkload
 *
 * Generated from protobuf message <code>google.cloud.cloudcontrolspartner.v1.Violation.Remediation</code>
 */
class Remediation extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Remediation instructions to resolve violations
     *
     * Generated from protobuf field <code>.google.cloud.cloudcontrolspartner.v1.Violation.Remediation.Instructions instructions = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $instructions = null;
    /**
     * Values that can resolve the violation
     * For example: for list org policy violations, this will either be the list
     * of allowed or denied values
     *
     * Generated from protobuf field <code>repeated string compliant_values = 2;</code>
     */
    private $compliant_values;
    /**
     * Output only. Remediation type based on the type of org policy values
     * violated
     *
     * Generated from protobuf field <code>.google.cloud.cloudcontrolspartner.v1.Violation.Remediation.RemediationType remediation_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $remediation_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\CloudControlsPartner\V1\Violation\Remediation\Instructions $instructions
     *           Required. Remediation instructions to resolve violations
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $compliant_values
     *           Values that can resolve the violation
     *           For example: for list org policy violations, this will either be the list
     *           of allowed or denied values
     *     @type int $remediation_type
     *           Output only. Remediation type based on the type of org policy values
     *           violated
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Cloudcontrolspartner\V1\Violations::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Remediation instructions to resolve violations
     *
     * Generated from protobuf field <code>.google.cloud.cloudcontrolspartner.v1.Violation.Remediation.Instructions instructions = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\CloudControlsPartner\V1\Violation\Remediation\Instructions|null
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    public function hasInstructions()
    {
        return isset($this->instructions);
    }

    public function clearInstructions()
    {
        unset($this->instructions);
    }

    /**
     * Required. Remediation instructions to resolve violations
     *
     * Generated from protobuf field <code>.google.cloud.cloudcontrolspartner.v1.Violation.Remediation.Instructions instructions = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\CloudControlsPartner\V1\Violation\Remediation\Instructions $var
     * @return $this
     */
    public function setInstructions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CloudControlsPartner\V1\Violation\Remediation\Instructions::class);
        $this->instructions = $var;

        return $this;
    }

    /**
     * Values that can resolve the violation
     * For example: for list org policy violations, this will either be the list
     * of allowed or denied values
     *
     * Generated from protobuf field <code>repeated string compliant_values = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCompliantValues()
    {
        return $this->compliant_values;
    }

    /**
     * Values that can resolve the violation
     * For example: for list org policy violations, this will either be the list
     * of allowed or denied values
     *
     * Generated from protobuf field <code>repeated string compliant_values = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCompliantValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->compliant_values = $arr;

        return $this;
    }

    /**
     * Output only. Remediation type based on the type of org policy values
     * violated
     *
     * Generated from protobuf field <code>.google.cloud.cloudcontrolspartner.v1.Violation.Remediation.RemediationType remediation_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getRemediationType()
    {
        return $this->remediation_type;
    }

    /**
     * Output only. Remediation type based on the type of org policy values
     * violated
     *
     * Generated from protobuf field <code>.google.cloud.cloudcontrolspartner.v1.Violation.Remediation.RemediationType remediation_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setRemediationType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\CloudControlsPartner\V1\Violation\Remediation\RemediationType::class);
        $this->remediation_type = $var;

        return $this;
    }

}


