<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/group.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Google Group in Google Chat.
 *
 * Generated from protobuf message <code>google.chat.v1.Group</code>
 */
class Group extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name for a Google Group.
     * Represents a
     * [group](https://cloud.google.com/identity/docs/reference/rest/v1/groups) in
     * Cloud Identity Groups API.
     * Format: groups/{group}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Resource name for a Google Group.
     *           Represents a
     *           [group](https://cloud.google.com/identity/docs/reference/rest/v1/groups) in
     *           Cloud Identity Groups API.
     *           Format: groups/{group}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\Group::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name for a Google Group.
     * Represents a
     * [group](https://cloud.google.com/identity/docs/reference/rest/v1/groups) in
     * Cloud Identity Groups API.
     * Format: groups/{group}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource name for a Google Group.
     * Represents a
     * [group](https://cloud.google.com/identity/docs/reference/rest/v1/groups) in
     * Cloud Identity Groups API.
     * Format: groups/{group}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

