<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1\CaPool\PublishingOptions;

use UnexpectedValueException;

/**
 * Supported encoding formats for publishing.
 *
 * Protobuf type <code>google.cloud.security.privateca.v1.CaPool.PublishingOptions.EncodingFormat</code>
 */
class EncodingFormat
{
    /**
     * Not specified. By default, PEM format will be used.
     *
     * Generated from protobuf enum <code>ENCODING_FORMAT_UNSPECIFIED = 0;</code>
     */
    const ENCODING_FORMAT_UNSPECIFIED = 0;
    /**
     * The
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]'s
     * CA certificate and CRLs will be published in PEM format.
     *
     * Generated from protobuf enum <code>PEM = 1;</code>
     */
    const PEM = 1;
    /**
     * The
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]'s
     * CA certificate and CRLs will be published in DER format.
     *
     * Generated from protobuf enum <code>DER = 2;</code>
     */
    const DER = 2;

    private static $valueToName = [
        self::ENCODING_FORMAT_UNSPECIFIED => 'ENCODING_FORMAT_UNSPECIFIED',
        self::PEM => 'PEM',
        self::DER => 'DER',
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


