<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/http_route.proto

namespace Google\Cloud\NetworkServices\V1\HttpRoute;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies how to select a route rule based on HTTP request headers.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.HttpRoute.HeaderMatch</code>
 */
class HeaderMatch extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the HTTP header to match against.
     *
     * Generated from protobuf field <code>string header = 1;</code>
     */
    protected $header = '';
    /**
     * If specified, the match result will be inverted before checking. Default
     * value is set to false.
     *
     * Generated from protobuf field <code>bool invert_match = 8;</code>
     */
    protected $invert_match = false;
    protected $MatchType;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $exact_match
     *           The value of the header should match exactly the content of
     *           exact_match.
     *     @type string $regex_match
     *           The value of the header must match the regular expression specified in
     *           regex_match. For regular expression grammar, please see:
     *           https://github.com/google/re2/wiki/Syntax
     *     @type string $prefix_match
     *           The value of the header must start with the contents of prefix_match.
     *     @type bool $present_match
     *           A header with header_name must exist. The match takes place whether or
     *           not the header has a value.
     *     @type string $suffix_match
     *           The value of the header must end with the contents of suffix_match.
     *     @type \Google\Cloud\NetworkServices\V1\HttpRoute\HeaderMatch\IntegerRange $range_match
     *           If specified, the rule will match if the request header value is within
     *           the range.
     *     @type string $header
     *           The name of the HTTP header to match against.
     *     @type bool $invert_match
     *           If specified, the match result will be inverted before checking. Default
     *           value is set to false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\HttpRoute::initOnce();
        parent::__construct($data);
    }

    /**
     * The value of the header should match exactly the content of
     * exact_match.
     *
     * Generated from protobuf field <code>string exact_match = 2;</code>
     * @return string
     */
    public function getExactMatch()
    {
        return $this->readOneof(2);
    }

    public function hasExactMatch()
    {
        return $this->hasOneof(2);
    }

    /**
     * The value of the header should match exactly the content of
     * exact_match.
     *
     * Generated from protobuf field <code>string exact_match = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setExactMatch($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The value of the header must match the regular expression specified in
     * regex_match. For regular expression grammar, please see:
     * https://github.com/google/re2/wiki/Syntax
     *
     * Generated from protobuf field <code>string regex_match = 3;</code>
     * @return string
     */
    public function getRegexMatch()
    {
        return $this->readOneof(3);
    }

    public function hasRegexMatch()
    {
        return $this->hasOneof(3);
    }

    /**
     * The value of the header must match the regular expression specified in
     * regex_match. For regular expression grammar, please see:
     * https://github.com/google/re2/wiki/Syntax
     *
     * Generated from protobuf field <code>string regex_match = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRegexMatch($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The value of the header must start with the contents of prefix_match.
     *
     * Generated from protobuf field <code>string prefix_match = 4;</code>
     * @return string
     */
    public function getPrefixMatch()
    {
        return $this->readOneof(4);
    }

    public function hasPrefixMatch()
    {
        return $this->hasOneof(4);
    }

    /**
     * The value of the header must start with the contents of prefix_match.
     *
     * Generated from protobuf field <code>string prefix_match = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPrefixMatch($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * A header with header_name must exist. The match takes place whether or
     * not the header has a value.
     *
     * Generated from protobuf field <code>bool present_match = 5;</code>
     * @return bool
     */
    public function getPresentMatch()
    {
        return $this->readOneof(5);
    }

    public function hasPresentMatch()
    {
        return $this->hasOneof(5);
    }

    /**
     * A header with header_name must exist. The match takes place whether or
     * not the header has a value.
     *
     * Generated from protobuf field <code>bool present_match = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setPresentMatch($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The value of the header must end with the contents of suffix_match.
     *
     * Generated from protobuf field <code>string suffix_match = 6;</code>
     * @return string
     */
    public function getSuffixMatch()
    {
        return $this->readOneof(6);
    }

    public function hasSuffixMatch()
    {
        return $this->hasOneof(6);
    }

    /**
     * The value of the header must end with the contents of suffix_match.
     *
     * Generated from protobuf field <code>string suffix_match = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setSuffixMatch($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * If specified, the rule will match if the request header value is within
     * the range.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.HttpRoute.HeaderMatch.IntegerRange range_match = 7;</code>
     * @return \Google\Cloud\NetworkServices\V1\HttpRoute\HeaderMatch\IntegerRange|null
     */
    public function getRangeMatch()
    {
        return $this->readOneof(7);
    }

    public function hasRangeMatch()
    {
        return $this->hasOneof(7);
    }

    /**
     * If specified, the rule will match if the request header value is within
     * the range.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.HttpRoute.HeaderMatch.IntegerRange range_match = 7;</code>
     * @param \Google\Cloud\NetworkServices\V1\HttpRoute\HeaderMatch\IntegerRange $var
     * @return $this
     */
    public function setRangeMatch($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkServices\V1\HttpRoute\HeaderMatch\IntegerRange::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * The name of the HTTP header to match against.
     *
     * Generated from protobuf field <code>string header = 1;</code>
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * The name of the HTTP header to match against.
     *
     * Generated from protobuf field <code>string header = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkString($var, True);
        $this->header = $var;

        return $this;
    }

    /**
     * If specified, the match result will be inverted before checking. Default
     * value is set to false.
     *
     * Generated from protobuf field <code>bool invert_match = 8;</code>
     * @return bool
     */
    public function getInvertMatch()
    {
        return $this->invert_match;
    }

    /**
     * If specified, the match result will be inverted before checking. Default
     * value is set to false.
     *
     * Generated from protobuf field <code>bool invert_match = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setInvertMatch($var)
    {
        GPBUtil::checkBool($var);
        $this->invert_match = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getMatchType()
    {
        return $this->whichOneof("MatchType");
    }

}


