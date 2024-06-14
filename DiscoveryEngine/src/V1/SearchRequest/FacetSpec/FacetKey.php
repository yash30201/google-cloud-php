<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\SearchRequest\FacetSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies how a facet is computed.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.SearchRequest.FacetSpec.FacetKey</code>
 */
class FacetKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Supported textual and numerical facet keys in
     * [Document][google.cloud.discoveryengine.v1.Document] object, over which
     * the facet values are computed. Facet key is case-sensitive.
     *
     * Generated from protobuf field <code>string key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $key = '';
    /**
     * Set only if values should be bucketed into intervals. Must be set
     * for facets with numerical values. Must not be set for facet with text
     * values. Maximum number of intervals is 30.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Interval intervals = 2;</code>
     */
    private $intervals;
    /**
     * Only get facet for the given restricted values. Only supported on
     * textual fields. For example, suppose "category" has three values
     * "Action > 2022", "Action > 2021" and "Sci-Fi > 2022". If set
     * "restricted_values" to "Action > 2022", the "category" facet only
     * contains "Action > 2022". Only supported on textual fields. Maximum
     * is 10.
     *
     * Generated from protobuf field <code>repeated string restricted_values = 3;</code>
     */
    private $restricted_values;
    /**
     * Only get facet values that start with the given string prefix. For
     * example, suppose "category" has three values "Action > 2022",
     * "Action > 2021" and "Sci-Fi > 2022". If set "prefixes" to "Action", the
     * "category" facet only contains "Action > 2022" and "Action > 2021".
     * Only supported on textual fields. Maximum is 10.
     *
     * Generated from protobuf field <code>repeated string prefixes = 4;</code>
     */
    private $prefixes;
    /**
     * Only get facet values that contain the given strings. For example,
     * suppose "category" has three values "Action > 2022",
     * "Action > 2021" and "Sci-Fi > 2022". If set "contains" to "2022", the
     * "category" facet only contains "Action > 2022" and "Sci-Fi > 2022".
     * Only supported on textual fields. Maximum is 10.
     *
     * Generated from protobuf field <code>repeated string contains = 5;</code>
     */
    private $contains;
    /**
     * True to make facet keys case insensitive when getting faceting
     * values with prefixes or contains; false otherwise.
     *
     * Generated from protobuf field <code>bool case_insensitive = 6;</code>
     */
    protected $case_insensitive = false;
    /**
     * The order in which documents are returned.
     * Allowed values are:
     * * "count desc", which means order by
     * [SearchResponse.Facet.values.count][google.cloud.discoveryengine.v1.SearchResponse.Facet.FacetValue.count]
     * descending.
     * * "value desc", which means order by
     * [SearchResponse.Facet.values.value][google.cloud.discoveryengine.v1.SearchResponse.Facet.FacetValue.value]
     * descending.
     *   Only applies to textual facets.
     * If not set, textual values are sorted in [natural
     * order](https://en.wikipedia.org/wiki/Natural_sort_order); numerical
     * intervals are sorted in the order given by
     * [FacetSpec.FacetKey.intervals][google.cloud.discoveryengine.v1.SearchRequest.FacetSpec.FacetKey.intervals].
     *
     * Generated from protobuf field <code>string order_by = 7;</code>
     */
    protected $order_by = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *           Required. Supported textual and numerical facet keys in
     *           [Document][google.cloud.discoveryengine.v1.Document] object, over which
     *           the facet values are computed. Facet key is case-sensitive.
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\Interval>|\Google\Protobuf\Internal\RepeatedField $intervals
     *           Set only if values should be bucketed into intervals. Must be set
     *           for facets with numerical values. Must not be set for facet with text
     *           values. Maximum number of intervals is 30.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $restricted_values
     *           Only get facet for the given restricted values. Only supported on
     *           textual fields. For example, suppose "category" has three values
     *           "Action > 2022", "Action > 2021" and "Sci-Fi > 2022". If set
     *           "restricted_values" to "Action > 2022", the "category" facet only
     *           contains "Action > 2022". Only supported on textual fields. Maximum
     *           is 10.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $prefixes
     *           Only get facet values that start with the given string prefix. For
     *           example, suppose "category" has three values "Action > 2022",
     *           "Action > 2021" and "Sci-Fi > 2022". If set "prefixes" to "Action", the
     *           "category" facet only contains "Action > 2022" and "Action > 2021".
     *           Only supported on textual fields. Maximum is 10.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $contains
     *           Only get facet values that contain the given strings. For example,
     *           suppose "category" has three values "Action > 2022",
     *           "Action > 2021" and "Sci-Fi > 2022". If set "contains" to "2022", the
     *           "category" facet only contains "Action > 2022" and "Sci-Fi > 2022".
     *           Only supported on textual fields. Maximum is 10.
     *     @type bool $case_insensitive
     *           True to make facet keys case insensitive when getting faceting
     *           values with prefixes or contains; false otherwise.
     *     @type string $order_by
     *           The order in which documents are returned.
     *           Allowed values are:
     *           * "count desc", which means order by
     *           [SearchResponse.Facet.values.count][google.cloud.discoveryengine.v1.SearchResponse.Facet.FacetValue.count]
     *           descending.
     *           * "value desc", which means order by
     *           [SearchResponse.Facet.values.value][google.cloud.discoveryengine.v1.SearchResponse.Facet.FacetValue.value]
     *           descending.
     *             Only applies to textual facets.
     *           If not set, textual values are sorted in [natural
     *           order](https://en.wikipedia.org/wiki/Natural_sort_order); numerical
     *           intervals are sorted in the order given by
     *           [FacetSpec.FacetKey.intervals][google.cloud.discoveryengine.v1.SearchRequest.FacetSpec.FacetKey.intervals].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Supported textual and numerical facet keys in
     * [Document][google.cloud.discoveryengine.v1.Document] object, over which
     * the facet values are computed. Facet key is case-sensitive.
     *
     * Generated from protobuf field <code>string key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Required. Supported textual and numerical facet keys in
     * [Document][google.cloud.discoveryengine.v1.Document] object, over which
     * the facet values are computed. Facet key is case-sensitive.
     *
     * Generated from protobuf field <code>string key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * Set only if values should be bucketed into intervals. Must be set
     * for facets with numerical values. Must not be set for facet with text
     * values. Maximum number of intervals is 30.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Interval intervals = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIntervals()
    {
        return $this->intervals;
    }

    /**
     * Set only if values should be bucketed into intervals. Must be set
     * for facets with numerical values. Must not be set for facet with text
     * values. Maximum number of intervals is 30.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Interval intervals = 2;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\Interval>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIntervals($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\Interval::class);
        $this->intervals = $arr;

        return $this;
    }

    /**
     * Only get facet for the given restricted values. Only supported on
     * textual fields. For example, suppose "category" has three values
     * "Action > 2022", "Action > 2021" and "Sci-Fi > 2022". If set
     * "restricted_values" to "Action > 2022", the "category" facet only
     * contains "Action > 2022". Only supported on textual fields. Maximum
     * is 10.
     *
     * Generated from protobuf field <code>repeated string restricted_values = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRestrictedValues()
    {
        return $this->restricted_values;
    }

    /**
     * Only get facet for the given restricted values. Only supported on
     * textual fields. For example, suppose "category" has three values
     * "Action > 2022", "Action > 2021" and "Sci-Fi > 2022". If set
     * "restricted_values" to "Action > 2022", the "category" facet only
     * contains "Action > 2022". Only supported on textual fields. Maximum
     * is 10.
     *
     * Generated from protobuf field <code>repeated string restricted_values = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRestrictedValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->restricted_values = $arr;

        return $this;
    }

    /**
     * Only get facet values that start with the given string prefix. For
     * example, suppose "category" has three values "Action > 2022",
     * "Action > 2021" and "Sci-Fi > 2022". If set "prefixes" to "Action", the
     * "category" facet only contains "Action > 2022" and "Action > 2021".
     * Only supported on textual fields. Maximum is 10.
     *
     * Generated from protobuf field <code>repeated string prefixes = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPrefixes()
    {
        return $this->prefixes;
    }

    /**
     * Only get facet values that start with the given string prefix. For
     * example, suppose "category" has three values "Action > 2022",
     * "Action > 2021" and "Sci-Fi > 2022". If set "prefixes" to "Action", the
     * "category" facet only contains "Action > 2022" and "Action > 2021".
     * Only supported on textual fields. Maximum is 10.
     *
     * Generated from protobuf field <code>repeated string prefixes = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPrefixes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->prefixes = $arr;

        return $this;
    }

    /**
     * Only get facet values that contain the given strings. For example,
     * suppose "category" has three values "Action > 2022",
     * "Action > 2021" and "Sci-Fi > 2022". If set "contains" to "2022", the
     * "category" facet only contains "Action > 2022" and "Sci-Fi > 2022".
     * Only supported on textual fields. Maximum is 10.
     *
     * Generated from protobuf field <code>repeated string contains = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContains()
    {
        return $this->contains;
    }

    /**
     * Only get facet values that contain the given strings. For example,
     * suppose "category" has three values "Action > 2022",
     * "Action > 2021" and "Sci-Fi > 2022". If set "contains" to "2022", the
     * "category" facet only contains "Action > 2022" and "Sci-Fi > 2022".
     * Only supported on textual fields. Maximum is 10.
     *
     * Generated from protobuf field <code>repeated string contains = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContains($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->contains = $arr;

        return $this;
    }

    /**
     * True to make facet keys case insensitive when getting faceting
     * values with prefixes or contains; false otherwise.
     *
     * Generated from protobuf field <code>bool case_insensitive = 6;</code>
     * @return bool
     */
    public function getCaseInsensitive()
    {
        return $this->case_insensitive;
    }

    /**
     * True to make facet keys case insensitive when getting faceting
     * values with prefixes or contains; false otherwise.
     *
     * Generated from protobuf field <code>bool case_insensitive = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setCaseInsensitive($var)
    {
        GPBUtil::checkBool($var);
        $this->case_insensitive = $var;

        return $this;
    }

    /**
     * The order in which documents are returned.
     * Allowed values are:
     * * "count desc", which means order by
     * [SearchResponse.Facet.values.count][google.cloud.discoveryengine.v1.SearchResponse.Facet.FacetValue.count]
     * descending.
     * * "value desc", which means order by
     * [SearchResponse.Facet.values.value][google.cloud.discoveryengine.v1.SearchResponse.Facet.FacetValue.value]
     * descending.
     *   Only applies to textual facets.
     * If not set, textual values are sorted in [natural
     * order](https://en.wikipedia.org/wiki/Natural_sort_order); numerical
     * intervals are sorted in the order given by
     * [FacetSpec.FacetKey.intervals][google.cloud.discoveryengine.v1.SearchRequest.FacetSpec.FacetKey.intervals].
     *
     * Generated from protobuf field <code>string order_by = 7;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * The order in which documents are returned.
     * Allowed values are:
     * * "count desc", which means order by
     * [SearchResponse.Facet.values.count][google.cloud.discoveryengine.v1.SearchResponse.Facet.FacetValue.count]
     * descending.
     * * "value desc", which means order by
     * [SearchResponse.Facet.values.value][google.cloud.discoveryengine.v1.SearchResponse.Facet.FacetValue.value]
     * descending.
     *   Only applies to textual facets.
     * If not set, textual values are sorted in [natural
     * order](https://en.wikipedia.org/wiki/Natural_sort_order); numerical
     * intervals are sorted in the order given by
     * [FacetSpec.FacetKey.intervals][google.cloud.discoveryengine.v1.SearchRequest.FacetSpec.FacetKey.intervals].
     *
     * Generated from protobuf field <code>string order_by = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}


