<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/routeoptimization/v1/route_optimization_service.proto

namespace Google\Maps\RouteOptimization\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Encapsulates a waypoint. Waypoints mark arrival and departure locations of
 * VisitRequests, and start and end locations of Vehicles.
 *
 * Generated from protobuf message <code>google.maps.routeoptimization.v1.Waypoint</code>
 */
class Waypoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Indicates that the location of this waypoint is meant to have a
     * preference for the vehicle to stop at a particular side of road. When you
     * set this value, the route will pass through the location so that the
     * vehicle can stop at the side of road that the location is biased towards
     * from the center of the road. This option doesn't work for the 'WALKING'
     * travel mode.
     *
     * Generated from protobuf field <code>bool side_of_road = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $side_of_road = false;
    protected $location_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Maps\RouteOptimization\V1\Location $location
     *           A point specified using geographic coordinates, including an optional
     *           heading.
     *     @type string $place_id
     *           The POI Place ID associated with the waypoint.
     *     @type bool $side_of_road
     *           Optional. Indicates that the location of this waypoint is meant to have a
     *           preference for the vehicle to stop at a particular side of road. When you
     *           set this value, the route will pass through the location so that the
     *           vehicle can stop at the side of road that the location is biased towards
     *           from the center of the road. This option doesn't work for the 'WALKING'
     *           travel mode.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Routeoptimization\V1\RouteOptimizationService::initOnce();
        parent::__construct($data);
    }

    /**
     * A point specified using geographic coordinates, including an optional
     * heading.
     *
     * Generated from protobuf field <code>.google.maps.routeoptimization.v1.Location location = 1;</code>
     * @return \Google\Maps\RouteOptimization\V1\Location|null
     */
    public function getLocation()
    {
        return $this->readOneof(1);
    }

    public function hasLocation()
    {
        return $this->hasOneof(1);
    }

    /**
     * A point specified using geographic coordinates, including an optional
     * heading.
     *
     * Generated from protobuf field <code>.google.maps.routeoptimization.v1.Location location = 1;</code>
     * @param \Google\Maps\RouteOptimization\V1\Location $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Maps\RouteOptimization\V1\Location::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The POI Place ID associated with the waypoint.
     *
     * Generated from protobuf field <code>string place_id = 2;</code>
     * @return string
     */
    public function getPlaceId()
    {
        return $this->readOneof(2);
    }

    public function hasPlaceId()
    {
        return $this->hasOneof(2);
    }

    /**
     * The POI Place ID associated with the waypoint.
     *
     * Generated from protobuf field <code>string place_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPlaceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Optional. Indicates that the location of this waypoint is meant to have a
     * preference for the vehicle to stop at a particular side of road. When you
     * set this value, the route will pass through the location so that the
     * vehicle can stop at the side of road that the location is biased towards
     * from the center of the road. This option doesn't work for the 'WALKING'
     * travel mode.
     *
     * Generated from protobuf field <code>bool side_of_road = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getSideOfRoad()
    {
        return $this->side_of_road;
    }

    /**
     * Optional. Indicates that the location of this waypoint is meant to have a
     * preference for the vehicle to stop at a particular side of road. When you
     * set this value, the route will pass through the location so that the
     * vehicle can stop at the side of road that the location is biased towards
     * from the center of the road. This option doesn't work for the 'WALKING'
     * travel mode.
     *
     * Generated from protobuf field <code>bool side_of_road = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setSideOfRoad($var)
    {
        GPBUtil::checkBool($var);
        $this->side_of_road = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocationType()
    {
        return $this->whichOneof("location_type");
    }

}

