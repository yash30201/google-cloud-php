<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql.proto

namespace Google\Cloud\Sql\V1beta4\SqlInstancesVerifyExternalSyncSettingsRequest;

use UnexpectedValueException;

/**
 * MigrationType determines whether the migration is a physical file-based
 * migration or a logical dump file-based migration.
 *
 * Protobuf type <code>google.cloud.sql.v1beta4.SqlInstancesVerifyExternalSyncSettingsRequest.MigrationType</code>
 */
class MigrationType
{
    /**
     * Default value is a logical dump file-based migration
     *
     * Generated from protobuf enum <code>MIGRATION_TYPE_UNSPECIFIED = 0;</code>
     */
    const MIGRATION_TYPE_UNSPECIFIED = 0;
    /**
     * Logical dump file-based migration
     *
     * Generated from protobuf enum <code>LOGICAL = 1;</code>
     */
    const LOGICAL = 1;
    /**
     * Physical file-based migration
     *
     * Generated from protobuf enum <code>PHYSICAL = 2;</code>
     */
    const PHYSICAL = 2;

    private static $valueToName = [
        self::MIGRATION_TYPE_UNSPECIFIED => 'MIGRATION_TYPE_UNSPECIFIED',
        self::LOGICAL => 'LOGICAL',
        self::PHYSICAL => 'PHYSICAL',
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


