<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/v1/vehicle_api.proto

namespace Google\Maps\FleetEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `ListVehicles` response message.
 *
 * Generated from protobuf message <code>maps.fleetengine.v1.ListVehiclesResponse</code>
 */
class ListVehiclesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Vehicles matching the criteria in the request.
     * The maximum number of vehicles returned is determined by the `page_size`
     * field in the request.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.v1.Vehicle vehicles = 1;</code>
     */
    private $vehicles;
    /**
     * Token to retrieve the next page of vehicles, or empty if there are no
     * more vehicles that meet the request criteria.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Required. Total number of vehicles matching the request criteria across all
     * pages.
     *
     * Generated from protobuf field <code>int64 total_size = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $total_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Maps\FleetEngine\V1\Vehicle>|\Google\Protobuf\Internal\RepeatedField $vehicles
     *           Vehicles matching the criteria in the request.
     *           The maximum number of vehicles returned is determined by the `page_size`
     *           field in the request.
     *     @type string $next_page_token
     *           Token to retrieve the next page of vehicles, or empty if there are no
     *           more vehicles that meet the request criteria.
     *     @type int|string $total_size
     *           Required. Total number of vehicles matching the request criteria across all
     *           pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Fleetengine\V1\VehicleApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Vehicles matching the criteria in the request.
     * The maximum number of vehicles returned is determined by the `page_size`
     * field in the request.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.v1.Vehicle vehicles = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVehicles()
    {
        return $this->vehicles;
    }

    /**
     * Vehicles matching the criteria in the request.
     * The maximum number of vehicles returned is determined by the `page_size`
     * field in the request.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.v1.Vehicle vehicles = 1;</code>
     * @param array<\Google\Maps\FleetEngine\V1\Vehicle>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVehicles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Maps\FleetEngine\V1\Vehicle::class);
        $this->vehicles = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of vehicles, or empty if there are no
     * more vehicles that meet the request criteria.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of vehicles, or empty if there are no
     * more vehicles that meet the request criteria.
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
     * Required. Total number of vehicles matching the request criteria across all
     * pages.
     *
     * Generated from protobuf field <code>int64 total_size = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int|string
     */
    public function getTotalSize()
    {
        return $this->total_size;
    }

    /**
     * Required. Total number of vehicles matching the request criteria across all
     * pages.
     *
     * Generated from protobuf field <code>int64 total_size = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_size = $var;

        return $this;
    }

}

