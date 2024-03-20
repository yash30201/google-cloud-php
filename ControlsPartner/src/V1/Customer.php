<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/cloudcontrolspartner/v1/customers.proto

namespace Google\Cloud\CloudControlsPartner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains metadata around a Cloud Controls Partner Customer
 *
 * Generated from protobuf message <code>google.cloud.cloudcontrolspartner.v1.Customer</code>
 */
class Customer extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. Format:
     * `organizations/{organization}/locations/{location}/customers/{customer}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * The customer organization's display name. E.g. "google.com".
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * Container for customer onboarding steps
     *
     * Generated from protobuf field <code>.google.cloud.cloudcontrolspartner.v1.CustomerOnboardingState customer_onboarding_state = 3;</code>
     */
    protected $customer_onboarding_state = null;
    /**
     * Indicates whether a customer is fully onboarded
     *
     * Generated from protobuf field <code>bool is_onboarded = 4;</code>
     */
    protected $is_onboarded = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. Format:
     *           `organizations/{organization}/locations/{location}/customers/{customer}`
     *     @type string $display_name
     *           The customer organization's display name. E.g. "google.com".
     *     @type \Google\Cloud\CloudControlsPartner\V1\CustomerOnboardingState $customer_onboarding_state
     *           Container for customer onboarding steps
     *     @type bool $is_onboarded
     *           Indicates whether a customer is fully onboarded
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Cloudcontrolspartner\V1\Customers::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. Format:
     * `organizations/{organization}/locations/{location}/customers/{customer}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. Format:
     * `organizations/{organization}/locations/{location}/customers/{customer}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The customer organization's display name. E.g. "google.com".
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The customer organization's display name. E.g. "google.com".
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Container for customer onboarding steps
     *
     * Generated from protobuf field <code>.google.cloud.cloudcontrolspartner.v1.CustomerOnboardingState customer_onboarding_state = 3;</code>
     * @return \Google\Cloud\CloudControlsPartner\V1\CustomerOnboardingState|null
     */
    public function getCustomerOnboardingState()
    {
        return $this->customer_onboarding_state;
    }

    public function hasCustomerOnboardingState()
    {
        return isset($this->customer_onboarding_state);
    }

    public function clearCustomerOnboardingState()
    {
        unset($this->customer_onboarding_state);
    }

    /**
     * Container for customer onboarding steps
     *
     * Generated from protobuf field <code>.google.cloud.cloudcontrolspartner.v1.CustomerOnboardingState customer_onboarding_state = 3;</code>
     * @param \Google\Cloud\CloudControlsPartner\V1\CustomerOnboardingState $var
     * @return $this
     */
    public function setCustomerOnboardingState($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CloudControlsPartner\V1\CustomerOnboardingState::class);
        $this->customer_onboarding_state = $var;

        return $this;
    }

    /**
     * Indicates whether a customer is fully onboarded
     *
     * Generated from protobuf field <code>bool is_onboarded = 4;</code>
     * @return bool
     */
    public function getIsOnboarded()
    {
        return $this->is_onboarded;
    }

    /**
     * Indicates whether a customer is fully onboarded
     *
     * Generated from protobuf field <code>bool is_onboarded = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsOnboarded($var)
    {
        GPBUtil::checkBool($var);
        $this->is_onboarded = $var;

        return $this;
    }

}

