<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1\IngestionDataSourceSettings\AwsKinesis;

use UnexpectedValueException;

/**
 * Possible states for ingestion from Amazon Kinesis Data Streams.
 *
 * Protobuf type <code>google.pubsub.v1.IngestionDataSourceSettings.AwsKinesis.State</code>
 */
class State
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Ingestion is active.
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * Permission denied encountered while consuming data from Kinesis.
     * This can happen if:
     *   - The provided `aws_role_arn` does not exist or does not have the
     *     appropriate permissions attached.
     *   - The provided `aws_role_arn` is not set up properly for Identity
     *     Federation using `gcp_service_account`.
     *   - The Pub/Sub SA is not granted the
     *     `iam.serviceAccounts.getOpenIdToken` permission on
     *     `gcp_service_account`.
     *
     * Generated from protobuf enum <code>KINESIS_PERMISSION_DENIED = 2;</code>
     */
    const KINESIS_PERMISSION_DENIED = 2;
    /**
     * Permission denied encountered while publishing to the topic. This can
     * happen if the Pub/Sub SA has not been granted the [appropriate publish
     * permissions](https://cloud.google.com/pubsub/docs/access-control#pubsub.publisher)
     *
     * Generated from protobuf enum <code>PUBLISH_PERMISSION_DENIED = 3;</code>
     */
    const PUBLISH_PERMISSION_DENIED = 3;
    /**
     * The Kinesis stream does not exist.
     *
     * Generated from protobuf enum <code>STREAM_NOT_FOUND = 4;</code>
     */
    const STREAM_NOT_FOUND = 4;
    /**
     * The Kinesis consumer does not exist.
     *
     * Generated from protobuf enum <code>CONSUMER_NOT_FOUND = 5;</code>
     */
    const CONSUMER_NOT_FOUND = 5;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::ACTIVE => 'ACTIVE',
        self::KINESIS_PERMISSION_DENIED => 'KINESIS_PERMISSION_DENIED',
        self::PUBLISH_PERMISSION_DENIED => 'PUBLISH_PERMISSION_DENIED',
        self::STREAM_NOT_FOUND => 'STREAM_NOT_FOUND',
        self::CONSUMER_NOT_FOUND => 'CONSUMER_NOT_FOUND',
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


