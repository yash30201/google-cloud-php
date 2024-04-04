<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace Google\Cloud\Datastore\V1\CommitRequest;

use UnexpectedValueException;

/**
 * The modes available for commits.
 *
 * Protobuf type <code>google.datastore.v1.CommitRequest.Mode</code>
 */
class Mode
{
    /**
     * Unspecified. This value must not be used.
     *
     * Generated from protobuf enum <code>MODE_UNSPECIFIED = 0;</code>
     */
    const MODE_UNSPECIFIED = 0;
    /**
     * Transactional: The mutations are either all applied, or none are applied.
     * Learn about transactions
     * [here](https://cloud.google.com/datastore/docs/concepts/transactions).
     *
     * Generated from protobuf enum <code>TRANSACTIONAL = 1;</code>
     */
    const TRANSACTIONAL = 1;
    /**
     * Non-transactional: The mutations may not apply as all or none.
     *
     * Generated from protobuf enum <code>NON_TRANSACTIONAL = 2;</code>
     */
    const NON_TRANSACTIONAL = 2;

    private static $valueToName = [
        self::MODE_UNSPECIFIED => 'MODE_UNSPECIFIED',
        self::TRANSACTIONAL => 'TRANSACTIONAL',
        self::NON_TRANSACTIONAL => 'NON_TRANSACTIONAL',
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
