<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/v1/trip_api.proto

namespace Google\Maps\FleetEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SearchTrips response message.
 *
 * Generated from protobuf message <code>maps.fleetengine.v1.SearchTripsResponse</code>
 */
class SearchTripsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of trips for the requested vehicle.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.v1.Trip trips = 1;</code>
     */
    private $trips;
    /**
     * Pass this token in the SearchTripsRequest to page through list results. The
     * API returns a trip list on each call, and when no more results remain the
     * trip list is empty.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Maps\FleetEngine\V1\Trip>|\Google\Protobuf\Internal\RepeatedField $trips
     *           The list of trips for the requested vehicle.
     *     @type string $next_page_token
     *           Pass this token in the SearchTripsRequest to page through list results. The
     *           API returns a trip list on each call, and when no more results remain the
     *           trip list is empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Fleetengine\V1\TripApi::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of trips for the requested vehicle.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.v1.Trip trips = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTrips()
    {
        return $this->trips;
    }

    /**
     * The list of trips for the requested vehicle.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.v1.Trip trips = 1;</code>
     * @param array<\Google\Maps\FleetEngine\V1\Trip>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTrips($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Maps\FleetEngine\V1\Trip::class);
        $this->trips = $arr;

        return $this;
    }

    /**
     * Pass this token in the SearchTripsRequest to page through list results. The
     * API returns a trip list on each call, and when no more results remain the
     * trip list is empty.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Pass this token in the SearchTripsRequest to page through list results. The
     * API returns a trip list on each call, and when no more results remain the
     * trip list is empty.
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

}

