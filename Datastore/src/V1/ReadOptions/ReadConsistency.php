<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace Google\Cloud\Datastore\V1\ReadOptions;

use UnexpectedValueException;

/**
 * The possible values for read consistencies.
 *
 * Protobuf type <code>google.datastore.v1.ReadOptions.ReadConsistency</code>
 */
class ReadConsistency
{
    /**
     * Unspecified. This value must not be used.
     *
     * Generated from protobuf enum <code>READ_CONSISTENCY_UNSPECIFIED = 0;</code>
     */
    const READ_CONSISTENCY_UNSPECIFIED = 0;
    /**
     * Strong consistency.
     *
     * Generated from protobuf enum <code>STRONG = 1;</code>
     */
    const STRONG = 1;
    /**
     * Eventual consistency.
     *
     * Generated from protobuf enum <code>EVENTUAL = 2;</code>
     */
    const EVENTUAL = 2;

    private static $valueToName = [
        self::READ_CONSISTENCY_UNSPECIFIED => 'READ_CONSISTENCY_UNSPECIFIED',
        self::STRONG => 'STRONG',
        self::EVENTUAL => 'EVENTUAL',
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
