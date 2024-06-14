<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tensorboard_data.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * All the data stored in a TensorboardTimeSeries.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.TimeSeriesData</code>
 */
class TimeSeriesData extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the TensorboardTimeSeries, which will become the final
     * component of the TensorboardTimeSeries' resource name
     *
     * Generated from protobuf field <code>string tensorboard_time_series_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $tensorboard_time_series_id = '';
    /**
     * Required. Immutable. The value type of this time series. All the values in
     * this time series data must match this value type.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TensorboardTimeSeries.ValueType value_type = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $value_type = 0;
    /**
     * Required. Data points in this time series.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.TimeSeriesDataPoint values = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tensorboard_time_series_id
     *           Required. The ID of the TensorboardTimeSeries, which will become the final
     *           component of the TensorboardTimeSeries' resource name
     *     @type int $value_type
     *           Required. Immutable. The value type of this time series. All the values in
     *           this time series data must match this value type.
     *     @type array<\Google\Cloud\AIPlatform\V1\TimeSeriesDataPoint>|\Google\Protobuf\Internal\RepeatedField $values
     *           Required. Data points in this time series.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TensorboardData::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the TensorboardTimeSeries, which will become the final
     * component of the TensorboardTimeSeries' resource name
     *
     * Generated from protobuf field <code>string tensorboard_time_series_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTensorboardTimeSeriesId()
    {
        return $this->tensorboard_time_series_id;
    }

    /**
     * Required. The ID of the TensorboardTimeSeries, which will become the final
     * component of the TensorboardTimeSeries' resource name
     *
     * Generated from protobuf field <code>string tensorboard_time_series_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTensorboardTimeSeriesId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tensorboard_time_series_id = $var;

        return $this;
    }

    /**
     * Required. Immutable. The value type of this time series. All the values in
     * this time series data must match this value type.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TensorboardTimeSeries.ValueType value_type = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getValueType()
    {
        return $this->value_type;
    }

    /**
     * Required. Immutable. The value type of this time series. All the values in
     * this time series data must match this value type.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TensorboardTimeSeries.ValueType value_type = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setValueType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\TensorboardTimeSeries\ValueType::class);
        $this->value_type = $var;

        return $this;
    }

    /**
     * Required. Data points in this time series.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.TimeSeriesDataPoint values = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Required. Data points in this time series.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.TimeSeriesDataPoint values = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\TimeSeriesDataPoint>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\TimeSeriesDataPoint::class);
        $this->values = $arr;

        return $this;
    }

}

