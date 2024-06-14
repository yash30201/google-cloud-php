<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/delivery/v1/header.proto

namespace Google\Maps\FleetEngine\Delivery\V1\DeliveryRequestHeader;

use UnexpectedValueException;

/**
 * Possible types of SDK.
 *
 * Protobuf type <code>maps.fleetengine.delivery.v1.DeliveryRequestHeader.SdkType</code>
 */
class SdkType
{
    /**
     * The default value. This value is used if the `sdk_type` is omitted.
     *
     * Generated from protobuf enum <code>SDK_TYPE_UNSPECIFIED = 0;</code>
     */
    const SDK_TYPE_UNSPECIFIED = 0;
    /**
     * The calling SDK is Consumer.
     *
     * Generated from protobuf enum <code>CONSUMER = 1;</code>
     */
    const CONSUMER = 1;
    /**
     * The calling SDK is Driver.
     *
     * Generated from protobuf enum <code>DRIVER = 2;</code>
     */
    const DRIVER = 2;
    /**
     * The calling SDK is JavaScript.
     *
     * Generated from protobuf enum <code>JAVASCRIPT = 3;</code>
     */
    const JAVASCRIPT = 3;

    private static $valueToName = [
        self::SDK_TYPE_UNSPECIFIED => 'SDK_TYPE_UNSPECIFIED',
        self::CONSUMER => 'CONSUMER',
        self::DRIVER => 'DRIVER',
        self::JAVASCRIPT => 'JAVASCRIPT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


