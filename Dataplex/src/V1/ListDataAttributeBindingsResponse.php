<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_taxonomy.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List DataAttributeBindings response.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.ListDataAttributeBindingsResponse</code>
 */
class ListDataAttributeBindingsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * DataAttributeBindings under the given parent Location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.DataAttributeBinding data_attribute_bindings = 1;</code>
     */
    private $data_attribute_bindings;
    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable_locations = 3;</code>
     */
    private $unreachable_locations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dataplex\V1\DataAttributeBinding>|\Google\Protobuf\Internal\RepeatedField $data_attribute_bindings
     *           DataAttributeBindings under the given parent Location.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results in the list.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable_locations
     *           Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataTaxonomy::initOnce();
        parent::__construct($data);
    }

    /**
     * DataAttributeBindings under the given parent Location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.DataAttributeBinding data_attribute_bindings = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDataAttributeBindings()
    {
        return $this->data_attribute_bindings;
    }

    /**
     * DataAttributeBindings under the given parent Location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.DataAttributeBinding data_attribute_bindings = 1;</code>
     * @param array<\Google\Cloud\Dataplex\V1\DataAttributeBinding>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDataAttributeBindings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataplex\V1\DataAttributeBinding::class);
        $this->data_attribute_bindings = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable_locations = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachableLocations()
    {
        return $this->unreachable_locations;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable_locations = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachableLocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable_locations = $arr;

        return $this;
    }

}

