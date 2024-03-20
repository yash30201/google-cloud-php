<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/cloudcontrolspartner/v1/partners.proto

namespace Google\Cloud\CloudControlsPartner\V1\EkmMetadata;

use UnexpectedValueException;

/**
 * Represents Google Cloud supported external key management partners
 * [Google Cloud EKM partners
 * docs](https://cloud.google.com/kms/docs/ekm#supported_partners).
 *
 * Protobuf type <code>google.cloud.cloudcontrolspartner.v1.EkmMetadata.EkmSolution</code>
 */
class EkmSolution
{
    /**
     * Unspecified EKM solution
     *
     * Generated from protobuf enum <code>EKM_SOLUTION_UNSPECIFIED = 0;</code>
     */
    const EKM_SOLUTION_UNSPECIFIED = 0;
    /**
     * EKM Partner Fortanix
     *
     * Generated from protobuf enum <code>FORTANIX = 1;</code>
     */
    const FORTANIX = 1;
    /**
     * EKM Partner FutureX
     *
     * Generated from protobuf enum <code>FUTUREX = 2;</code>
     */
    const FUTUREX = 2;
    /**
     * EKM Partner Thales
     *
     * Generated from protobuf enum <code>THALES = 3;</code>
     */
    const THALES = 3;
    /**
     * EKM Partner Virtu
     *
     * Generated from protobuf enum <code>VIRTRU = 4;</code>
     */
    const VIRTRU = 4;

    private static $valueToName = [
        self::EKM_SOLUTION_UNSPECIFIED => 'EKM_SOLUTION_UNSPECIFIED',
        self::FORTANIX => 'FORTANIX',
        self::FUTUREX => 'FUTUREX',
        self::THALES => 'THALES',
        self::VIRTRU => 'VIRTRU',
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


