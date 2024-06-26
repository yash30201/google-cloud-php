<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/tax_rule.proto

namespace Google\Shopping\Merchant\Accounts\V1beta\TaxRule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A range of postal codes that defines the area.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.TaxRule.TaxPostalCodeRange</code>
 */
class TaxPostalCodeRange extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The start of the postal code range, which is also the smallest
     * in the range.
     *
     * Generated from protobuf field <code>string start = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $start = '';
    /**
     * The end of the postal code range. Will be the same as start if not
     * specified.
     *
     * Generated from protobuf field <code>string end = 2;</code>
     */
    protected $end = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $start
     *           Required. The start of the postal code range, which is also the smallest
     *           in the range.
     *     @type string $end
     *           The end of the postal code range. Will be the same as start if not
     *           specified.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\TaxRule::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The start of the postal code range, which is also the smallest
     * in the range.
     *
     * Generated from protobuf field <code>string start = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Required. The start of the postal code range, which is also the smallest
     * in the range.
     *
     * Generated from protobuf field <code>string start = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setStart($var)
    {
        GPBUtil::checkString($var, True);
        $this->start = $var;

        return $this;
    }

    /**
     * The end of the postal code range. Will be the same as start if not
     * specified.
     *
     * Generated from protobuf field <code>string end = 2;</code>
     * @return string
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * The end of the postal code range. Will be the same as start if not
     * specified.
     *
     * Generated from protobuf field <code>string end = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEnd($var)
    {
        GPBUtil::checkString($var, True);
        $this->end = $var;

        return $this;
    }

}


