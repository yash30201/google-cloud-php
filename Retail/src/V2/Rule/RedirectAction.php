<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/common.proto

namespace Google\Cloud\Retail\V2\Rule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Redirects a shopper to a specific page.
 * * Rule Condition:
 *   Must specify
 *   [Condition.query_terms][google.cloud.retail.v2.Condition.query_terms].
 * * Action Input: Request Query
 * * Action Result: Redirects shopper to provided uri.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.Rule.RedirectAction</code>
 */
class RedirectAction extends \Google\Protobuf\Internal\Message
{
    /**
     * URL must have length equal or less than 2000 characters.
     *
     * Generated from protobuf field <code>string redirect_uri = 1;</code>
     */
    private $redirect_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $redirect_uri
     *           URL must have length equal or less than 2000 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * URL must have length equal or less than 2000 characters.
     *
     * Generated from protobuf field <code>string redirect_uri = 1;</code>
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->redirect_uri;
    }

    /**
     * URL must have length equal or less than 2000 characters.
     *
     * Generated from protobuf field <code>string redirect_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRedirectUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->redirect_uri = $var;

        return $this;
    }

}


