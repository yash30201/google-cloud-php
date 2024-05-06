<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/cloud_armor.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about the [Google Cloud Armor security
 * policy](https://cloud.google.com/armor/docs/security-policy-overview)
 * relevant to the finding.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.SecurityPolicy</code>
 */
class SecurityPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the Google Cloud Armor security policy, for example,
     * "my-security-policy".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The type of Google Cloud Armor security policy for example, ‘backend
     * security policy’, ‘edge security policy’, ‘network edge security policy’,
     * or ‘always-on DDoS protection’.
     *
     * Generated from protobuf field <code>string type = 2;</code>
     */
    private $type = '';
    /**
     * Whether or not the associated rule or policy is in preview mode.
     *
     * Generated from protobuf field <code>bool preview = 3;</code>
     */
    private $preview = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the Google Cloud Armor security policy, for example,
     *           "my-security-policy".
     *     @type string $type
     *           The type of Google Cloud Armor security policy for example, ‘backend
     *           security policy’, ‘edge security policy’, ‘network edge security policy’,
     *           or ‘always-on DDoS protection’.
     *     @type bool $preview
     *           Whether or not the associated rule or policy is in preview mode.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\CloudArmor::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the Google Cloud Armor security policy, for example,
     * "my-security-policy".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the Google Cloud Armor security policy, for example,
     * "my-security-policy".
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The type of Google Cloud Armor security policy for example, ‘backend
     * security policy’, ‘edge security policy’, ‘network edge security policy’,
     * or ‘always-on DDoS protection’.
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of Google Cloud Armor security policy for example, ‘backend
     * security policy’, ‘edge security policy’, ‘network edge security policy’,
     * or ‘always-on DDoS protection’.
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Whether or not the associated rule or policy is in preview mode.
     *
     * Generated from protobuf field <code>bool preview = 3;</code>
     * @return bool
     */
    public function getPreview()
    {
        return $this->preview;
    }

    /**
     * Whether or not the associated rule or policy is in preview mode.
     *
     * Generated from protobuf field <code>bool preview = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setPreview($var)
    {
        GPBUtil::checkBool($var);
        $this->preview = $var;

        return $this;
    }

}

