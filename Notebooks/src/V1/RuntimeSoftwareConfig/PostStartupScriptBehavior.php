<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/runtime.proto

namespace Google\Cloud\Notebooks\V1\RuntimeSoftwareConfig;

use UnexpectedValueException;

/**
 * Behavior for the post startup script.
 *
 * Protobuf type <code>google.cloud.notebooks.v1.RuntimeSoftwareConfig.PostStartupScriptBehavior</code>
 */
class PostStartupScriptBehavior
{
    /**
     * Unspecified post startup script behavior. Will run only once at creation.
     *
     * Generated from protobuf enum <code>POST_STARTUP_SCRIPT_BEHAVIOR_UNSPECIFIED = 0;</code>
     */
    const POST_STARTUP_SCRIPT_BEHAVIOR_UNSPECIFIED = 0;
    /**
     * Runs the post startup script provided during creation at every start.
     *
     * Generated from protobuf enum <code>RUN_EVERY_START = 1;</code>
     */
    const RUN_EVERY_START = 1;
    /**
     * Downloads and runs the provided post startup script at every start.
     *
     * Generated from protobuf enum <code>DOWNLOAD_AND_RUN_EVERY_START = 2;</code>
     */
    const DOWNLOAD_AND_RUN_EVERY_START = 2;

    private static $valueToName = [
        self::POST_STARTUP_SCRIPT_BEHAVIOR_UNSPECIFIED => 'POST_STARTUP_SCRIPT_BEHAVIOR_UNSPECIFIED',
        self::RUN_EVERY_START => 'RUN_EVERY_START',
        self::DOWNLOAD_AND_RUN_EVERY_START => 'DOWNLOAD_AND_RUN_EVERY_START',
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


