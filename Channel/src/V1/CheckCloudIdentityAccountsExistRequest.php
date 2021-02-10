<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CloudChannelService.CheckCloudIdentityAccountsExist][google.cloud.channel.v1.CloudChannelService.CheckCloudIdentityAccountsExist].
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.CheckCloudIdentityAccountsExistRequest</code>
 */
class CheckCloudIdentityAccountsExistRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the reseller account.
     * The parent takes the format: accounts/{account_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $parent = '';
    /**
     * Required. Domain for which the Cloud Identity account customer is fetched.
     *
     * Generated from protobuf field <code>string domain = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $domain = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the reseller account.
     *           The parent takes the format: accounts/{account_id}
     *     @type string $domain
     *           Required. Domain for which the Cloud Identity account customer is fetched.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the reseller account.
     * The parent takes the format: accounts/{account_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the reseller account.
     * The parent takes the format: accounts/{account_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. Domain for which the Cloud Identity account customer is fetched.
     *
     * Generated from protobuf field <code>string domain = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Required. Domain for which the Cloud Identity account customer is fetched.
     *
     * Generated from protobuf field <code>string domain = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain = $var;

        return $this;
    }

}

