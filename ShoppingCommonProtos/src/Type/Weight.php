<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/type/types.proto

namespace Google\Shopping\Type;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The weight represented as the value in string and the unit.
 *
 * Generated from protobuf message <code>google.shopping.type.Weight</code>
 */
class Weight extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The weight represented as a number in micros (1 million micros is
     * an equivalent to one's currency standard unit, for example, 1 kg = 1000000
     * micros).
     * This field can also be set as infinity by setting to -1.
     * This field only support -1 and positive value.
     *
     * Generated from protobuf field <code>optional int64 amount_micros = 1;</code>
     */
    protected $amount_micros = null;
    /**
     * Required. The weight unit.
     * Acceptable values are: kg and lb
     *
     * Generated from protobuf field <code>.google.shopping.type.Weight.WeightUnit unit = 2;</code>
     */
    protected $unit = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $amount_micros
     *           Required. The weight represented as a number in micros (1 million micros is
     *           an equivalent to one's currency standard unit, for example, 1 kg = 1000000
     *           micros).
     *           This field can also be set as infinity by setting to -1.
     *           This field only support -1 and positive value.
     *     @type int $unit
     *           Required. The weight unit.
     *           Acceptable values are: kg and lb
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Type\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The weight represented as a number in micros (1 million micros is
     * an equivalent to one's currency standard unit, for example, 1 kg = 1000000
     * micros).
     * This field can also be set as infinity by setting to -1.
     * This field only support -1 and positive value.
     *
     * Generated from protobuf field <code>optional int64 amount_micros = 1;</code>
     * @return int|string
     */
    public function getAmountMicros()
    {
        return isset($this->amount_micros) ? $this->amount_micros : 0;
    }

    public function hasAmountMicros()
    {
        return isset($this->amount_micros);
    }

    public function clearAmountMicros()
    {
        unset($this->amount_micros);
    }

    /**
     * Required. The weight represented as a number in micros (1 million micros is
     * an equivalent to one's currency standard unit, for example, 1 kg = 1000000
     * micros).
     * This field can also be set as infinity by setting to -1.
     * This field only support -1 and positive value.
     *
     * Generated from protobuf field <code>optional int64 amount_micros = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount_micros = $var;

        return $this;
    }

    /**
     * Required. The weight unit.
     * Acceptable values are: kg and lb
     *
     * Generated from protobuf field <code>.google.shopping.type.Weight.WeightUnit unit = 2;</code>
     * @return int
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Required. The weight unit.
     * Acceptable values are: kg and lb
     *
     * Generated from protobuf field <code>.google.shopping.type.Weight.WeightUnit unit = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setUnit($var)
    {
        GPBUtil::checkEnum($var, \Google\Shopping\Type\Weight\WeightUnit::class);
        $this->unit = $var;

        return $this;
    }

}

