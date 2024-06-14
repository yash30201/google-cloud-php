<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1\ShipmentRoute;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The encoded representation of a polyline. More information on polyline
 * encoding can be found here:
 * https://developers.google.com/maps/documentation/utilities/polylinealgorithm
 * https://developers.google.com/maps/documentation/javascript/reference/geometry#encoding.
 *
 * Generated from protobuf message <code>google.cloud.optimization.v1.ShipmentRoute.EncodedPolyline</code>
 */
class EncodedPolyline extends \Google\Protobuf\Internal\Message
{
    /**
     * String representing encoded points of the polyline.
     *
     * Generated from protobuf field <code>string points = 1;</code>
     */
    protected $points = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $points
     *           String representing encoded points of the polyline.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Optimization\V1\FleetRouting::initOnce();
        parent::__construct($data);
    }

    /**
     * String representing encoded points of the polyline.
     *
     * Generated from protobuf field <code>string points = 1;</code>
     * @return string
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * String representing encoded points of the polyline.
     *
     * Generated from protobuf field <code>string points = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPoints($var)
    {
        GPBUtil::checkString($var, True);
        $this->points = $var;

        return $this;
    }

}


