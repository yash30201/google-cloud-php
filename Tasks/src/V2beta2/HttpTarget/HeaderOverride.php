<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta2/target.proto

namespace Google\Cloud\Tasks\V2beta2\HttpTarget;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Wraps the Header object.
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2beta2.HttpTarget.HeaderOverride</code>
 */
class HeaderOverride extends \Google\Protobuf\Internal\Message
{
    /**
     * header embodying a key and a value.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta2.HttpTarget.Header header = 1;</code>
     */
    private $header = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Tasks\V2beta2\HttpTarget\Header $header
     *           header embodying a key and a value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tasks\V2Beta2\Target::initOnce();
        parent::__construct($data);
    }

    /**
     * header embodying a key and a value.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta2.HttpTarget.Header header = 1;</code>
     * @return \Google\Cloud\Tasks\V2beta2\HttpTarget\Header|null
     */
    public function getHeader()
    {
        return $this->header;
    }

    public function hasHeader()
    {
        return isset($this->header);
    }

    public function clearHeader()
    {
        unset($this->header);
    }

    /**
     * header embodying a key and a value.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta2.HttpTarget.Header header = 1;</code>
     * @param \Google\Cloud\Tasks\V2beta2\HttpTarget\Header $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Tasks\V2beta2\HttpTarget\Header::class);
        $this->header = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HeaderOverride::class, \Google\Cloud\Tasks\V2beta2\HttpTarget_HeaderOverride::class);

