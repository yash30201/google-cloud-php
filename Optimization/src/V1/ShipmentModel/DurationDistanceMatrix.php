<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1\ShipmentModel;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies a duration and distance matrix from visit and vehicle start
 * locations to visit and vehicle end locations.
 *
 * Generated from protobuf message <code>google.cloud.optimization.v1.ShipmentModel.DurationDistanceMatrix</code>
 */
class DurationDistanceMatrix extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies the rows of the duration and distance matrix. It must have as
     * many elements as
     * [ShipmentModel.duration_distance_matrix_src_tags][google.cloud.optimization.v1.ShipmentModel.duration_distance_matrix_src_tags].
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.ShipmentModel.DurationDistanceMatrix.Row rows = 1;</code>
     */
    private $rows;
    /**
     * Tag defining to which vehicles this duration and distance matrix applies.
     * If empty, this applies to all vehicles, and there can only be a single
     * matrix.
     * Each vehicle start must match exactly one matrix, i.e. exactly one of
     * their `start_tags` field must match the `vehicle_start_tag` of a matrix
     * (and of that matrix only).
     * All matrices must have a different `vehicle_start_tag`.
     *
     * Generated from protobuf field <code>string vehicle_start_tag = 2;</code>
     */
    protected $vehicle_start_tag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Optimization\V1\ShipmentModel\DurationDistanceMatrix\Row>|\Google\Protobuf\Internal\RepeatedField $rows
     *           Specifies the rows of the duration and distance matrix. It must have as
     *           many elements as
     *           [ShipmentModel.duration_distance_matrix_src_tags][google.cloud.optimization.v1.ShipmentModel.duration_distance_matrix_src_tags].
     *     @type string $vehicle_start_tag
     *           Tag defining to which vehicles this duration and distance matrix applies.
     *           If empty, this applies to all vehicles, and there can only be a single
     *           matrix.
     *           Each vehicle start must match exactly one matrix, i.e. exactly one of
     *           their `start_tags` field must match the `vehicle_start_tag` of a matrix
     *           (and of that matrix only).
     *           All matrices must have a different `vehicle_start_tag`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Optimization\V1\FleetRouting::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies the rows of the duration and distance matrix. It must have as
     * many elements as
     * [ShipmentModel.duration_distance_matrix_src_tags][google.cloud.optimization.v1.ShipmentModel.duration_distance_matrix_src_tags].
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.ShipmentModel.DurationDistanceMatrix.Row rows = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Specifies the rows of the duration and distance matrix. It must have as
     * many elements as
     * [ShipmentModel.duration_distance_matrix_src_tags][google.cloud.optimization.v1.ShipmentModel.duration_distance_matrix_src_tags].
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.ShipmentModel.DurationDistanceMatrix.Row rows = 1;</code>
     * @param array<\Google\Cloud\Optimization\V1\ShipmentModel\DurationDistanceMatrix\Row>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRows($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Optimization\V1\ShipmentModel\DurationDistanceMatrix\Row::class);
        $this->rows = $arr;

        return $this;
    }

    /**
     * Tag defining to which vehicles this duration and distance matrix applies.
     * If empty, this applies to all vehicles, and there can only be a single
     * matrix.
     * Each vehicle start must match exactly one matrix, i.e. exactly one of
     * their `start_tags` field must match the `vehicle_start_tag` of a matrix
     * (and of that matrix only).
     * All matrices must have a different `vehicle_start_tag`.
     *
     * Generated from protobuf field <code>string vehicle_start_tag = 2;</code>
     * @return string
     */
    public function getVehicleStartTag()
    {
        return $this->vehicle_start_tag;
    }

    /**
     * Tag defining to which vehicles this duration and distance matrix applies.
     * If empty, this applies to all vehicles, and there can only be a single
     * matrix.
     * Each vehicle start must match exactly one matrix, i.e. exactly one of
     * their `start_tags` field must match the `vehicle_start_tag` of a matrix
     * (and of that matrix only).
     * All matrices must have a different `vehicle_start_tag`.
     *
     * Generated from protobuf field <code>string vehicle_start_tag = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVehicleStartTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->vehicle_start_tag = $var;

        return $this;
    }

}


