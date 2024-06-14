<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/conversational_search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\QueryUnderstandingSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Query rephraser specification.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.AnswerQueryRequest.QueryUnderstandingSpec.QueryRephraserSpec</code>
 */
class QueryRephraserSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Disable query rephraser.
     *
     * Generated from protobuf field <code>bool disable = 1;</code>
     */
    protected $disable = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $disable
     *           Disable query rephraser.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\ConversationalSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Disable query rephraser.
     *
     * Generated from protobuf field <code>bool disable = 1;</code>
     * @return bool
     */
    public function getDisable()
    {
        return $this->disable;
    }

    /**
     * Disable query rephraser.
     *
     * Generated from protobuf field <code>bool disable = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisable($var)
    {
        GPBUtil::checkBool($var);
        $this->disable = $var;

        return $this;
    }

}


