<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/cloudcontrolspartner/v1beta/completion_state.proto

namespace Google\Cloud\CloudControlsPartner\V1beta;

use UnexpectedValueException;

/**
 * Enum for possible completion states.
 *
 * Protobuf type <code>google.cloud.cloudcontrolspartner.v1beta.CompletionState</code>
 */
class CompletionState
{
    /**
     * Unspecified completion state.
     *
     * Generated from protobuf enum <code>COMPLETION_STATE_UNSPECIFIED = 0;</code>
     */
    const COMPLETION_STATE_UNSPECIFIED = 0;
    /**
     * Task started (has start date) but not yet completed.
     *
     * Generated from protobuf enum <code>PENDING = 1;</code>
     */
    const PENDING = 1;
    /**
     * Succeeded state.
     *
     * Generated from protobuf enum <code>SUCCEEDED = 2;</code>
     */
    const SUCCEEDED = 2;
    /**
     * Failed state.
     *
     * Generated from protobuf enum <code>FAILED = 3;</code>
     */
    const FAILED = 3;
    /**
     * Not applicable state.
     *
     * Generated from protobuf enum <code>NOT_APPLICABLE = 4;</code>
     */
    const NOT_APPLICABLE = 4;

    private static $valueToName = [
        self::COMPLETION_STATE_UNSPECIFIED => 'COMPLETION_STATE_UNSPECIFIED',
        self::PENDING => 'PENDING',
        self::SUCCEEDED => 'SUCCEEDED',
        self::FAILED => 'FAILED',
        self::NOT_APPLICABLE => 'NOT_APPLICABLE',
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

