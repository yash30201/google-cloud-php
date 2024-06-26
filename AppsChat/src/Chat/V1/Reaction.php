<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/reaction.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A reaction to a message.
 *
 * Generated from protobuf message <code>google.chat.v1.Reaction</code>
 */
class Reaction extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the reaction.
     * Format: `spaces/{space}/messages/{message}/reactions/{reaction}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Output only. The user who created the reaction.
     *
     * Generated from protobuf field <code>.google.chat.v1.User user = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $user = null;
    /**
     * The emoji used in the reaction.
     *
     * Generated from protobuf field <code>.google.chat.v1.Emoji emoji = 3;</code>
     */
    protected $emoji = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the reaction.
     *           Format: `spaces/{space}/messages/{message}/reactions/{reaction}`
     *     @type \Google\Apps\Chat\V1\User $user
     *           Output only. The user who created the reaction.
     *     @type \Google\Apps\Chat\V1\Emoji $emoji
     *           The emoji used in the reaction.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\Reaction::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the reaction.
     * Format: `spaces/{space}/messages/{message}/reactions/{reaction}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the reaction.
     * Format: `spaces/{space}/messages/{message}/reactions/{reaction}`
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

    /**
     * Output only. The user who created the reaction.
     *
     * Generated from protobuf field <code>.google.chat.v1.User user = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Apps\Chat\V1\User|null
     */
    public function getUser()
    {
        return $this->user;
    }

    public function hasUser()
    {
        return isset($this->user);
    }

    public function clearUser()
    {
        unset($this->user);
    }

    /**
     * Output only. The user who created the reaction.
     *
     * Generated from protobuf field <code>.google.chat.v1.User user = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Apps\Chat\V1\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\User::class);
        $this->user = $var;

        return $this;
    }

    /**
     * The emoji used in the reaction.
     *
     * Generated from protobuf field <code>.google.chat.v1.Emoji emoji = 3;</code>
     * @return \Google\Apps\Chat\V1\Emoji|null
     */
    public function getEmoji()
    {
        return $this->emoji;
    }

    public function hasEmoji()
    {
        return isset($this->emoji);
    }

    public function clearEmoji()
    {
        unset($this->emoji);
    }

    /**
     * The emoji used in the reaction.
     *
     * Generated from protobuf field <code>.google.chat.v1.Emoji emoji = 3;</code>
     * @param \Google\Apps\Chat\V1\Emoji $var
     * @return $this
     */
    public function setEmoji($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\Emoji::class);
        $this->emoji = $var;

        return $this;
    }

}

