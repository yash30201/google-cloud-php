<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/regions.proto

namespace Google\Shopping\Merchant\Accounts\V1beta\Region;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of postal codes that defines the region area.
 * Note: All regions defined using postal codes are accessible through the
 * account's `ShippingSettings.postalCodeGroups` resource.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.Region.PostalCodeArea</code>
 */
class PostalCodeArea extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. [CLDR territory
     * code](http://www.unicode.org/repos/cldr/tags/latest/common/main/en.xml)
     * or the country the postal code group applies to.
     *
     * Generated from protobuf field <code>string region_code = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $region_code = '';
    /**
     * Required. A range of postal codes.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.Region.PostalCodeArea.PostalCodeRange postal_codes = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $postal_codes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $region_code
     *           Required. [CLDR territory
     *           code](http://www.unicode.org/repos/cldr/tags/latest/common/main/en.xml)
     *           or the country the postal code group applies to.
     *     @type array<\Google\Shopping\Merchant\Accounts\V1beta\Region\PostalCodeArea\PostalCodeRange>|\Google\Protobuf\Internal\RepeatedField $postal_codes
     *           Required. A range of postal codes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\Regions::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. [CLDR territory
     * code](http://www.unicode.org/repos/cldr/tags/latest/common/main/en.xml)
     * or the country the postal code group applies to.
     *
     * Generated from protobuf field <code>string region_code = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegionCode()
    {
        return $this->region_code;
    }

    /**
     * Required. [CLDR territory
     * code](http://www.unicode.org/repos/cldr/tags/latest/common/main/en.xml)
     * or the country the postal code group applies to.
     *
     * Generated from protobuf field <code>string region_code = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRegionCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->region_code = $var;

        return $this;
    }

    /**
     * Required. A range of postal codes.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.Region.PostalCodeArea.PostalCodeRange postal_codes = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPostalCodes()
    {
        return $this->postal_codes;
    }

    /**
     * Required. A range of postal codes.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.Region.PostalCodeArea.PostalCodeRange postal_codes = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Shopping\Merchant\Accounts\V1beta\Region\PostalCodeArea\PostalCodeRange>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPostalCodes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Shopping\Merchant\Accounts\V1beta\Region\PostalCodeArea\PostalCodeRange::class);
        $this->postal_codes = $arr;

        return $this;
    }

}


