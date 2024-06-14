<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycentermanagement/v1/security_center_management.proto

namespace Google\Cloud\SecurityCenterManagement\V1\SecurityCenterService;

use UnexpectedValueException;

/**
 * Represents the possible intended states of enablement for a service or
 * module.
 *
 * Protobuf type <code>google.cloud.securitycentermanagement.v1.SecurityCenterService.EnablementState</code>
 */
class EnablementState
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>ENABLEMENT_STATE_UNSPECIFIED = 0;</code>
     */
    const ENABLEMENT_STATE_UNSPECIFIED = 0;
    /**
     * State is inherited from the parent resource. Not a valid effective
     * enablement state.
     *
     * Generated from protobuf enum <code>INHERITED = 1;</code>
     */
    const INHERITED = 1;
    /**
     * State is enabled.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    const ENABLED = 2;
    /**
     * State is disabled.
     *
     * Generated from protobuf enum <code>DISABLED = 3;</code>
     */
    const DISABLED = 3;

    private static $valueToName = [
        self::ENABLEMENT_STATE_UNSPECIFIED => 'ENABLEMENT_STATE_UNSPECIFIED',
        self::INHERITED => 'INHERITED',
        self::ENABLED => 'ENABLED',
        self::DISABLED => 'DISABLED',
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


