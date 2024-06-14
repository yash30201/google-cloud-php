<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/conversational_search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ConversationalSearchService.AnswerQuery][google.cloud.discoveryengine.v1beta.ConversationalSearchService.AnswerQuery]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.AnswerQueryRequest</code>
 */
class AnswerQueryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Search serving config, such as
     * `projects/&#42;&#47;locations/global/collections/default_collection/engines/&#42;&#47;servingConfigs/default_serving_config`,
     * or
     * `projects/&#42;&#47;locations/global/collections/default_collection/dataStores/&#42;&#47;servingConfigs/default_serving_config`.
     * This field is used to identify the serving configuration name, set
     * of models used to make the search.
     *
     * Generated from protobuf field <code>string serving_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $serving_config = '';
    /**
     * Required. Current user query.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Query query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $query = null;
    /**
     * The session resource name. Not required.
     * When session field is not set, the API is in sessionless mode.
     * We support auto session mode: users can use the wildcard symbol `-` as
     * session ID.  A new ID will be automatically generated and assigned.
     *
     * Generated from protobuf field <code>string session = 3 [(.google.api.resource_reference) = {</code>
     */
    protected $session = '';
    /**
     * Model specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SafetySpec safety_spec = 4;</code>
     */
    protected $safety_spec = null;
    /**
     * Related questions specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.RelatedQuestionsSpec related_questions_spec = 5;</code>
     */
    protected $related_questions_spec = null;
    /**
     * Answer generation specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.AnswerGenerationSpec answer_generation_spec = 7;</code>
     */
    protected $answer_generation_spec = null;
    /**
     * Search specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec search_spec = 8;</code>
     */
    protected $search_spec = null;
    /**
     * Query understanding specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.QueryUnderstandingSpec query_understanding_spec = 9;</code>
     */
    protected $query_understanding_spec = null;
    /**
     * Asynchronous mode control.
     * If enabled, the response will be returned with answer/session resource
     * name without final answer. The API users need to do the polling to get
     * the latest status of answer/session by calling
     * [ConversationalSearchService.GetAnswer][google.cloud.discoveryengine.v1beta.ConversationalSearchService.GetAnswer]
     * or
     * [ConversationalSearchService.GetSession][google.cloud.discoveryengine.v1beta.ConversationalSearchService.GetSession]
     * method.
     *
     * Generated from protobuf field <code>bool asynchronous_mode = 10;</code>
     */
    protected $asynchronous_mode = false;
    /**
     * A unique identifier for tracking visitors. For example, this could be
     * implemented with an HTTP cookie, which should be able to uniquely identify
     * a visitor on a single device. This unique identifier should not change if
     * the visitor logs in or out of the website.
     * This field should NOT have a fixed value such as `unknown_visitor`.
     * The field must be a UTF-8 encoded string with a length limit of 128
     * characters. Otherwise, an  `INVALID_ARGUMENT`  error is returned.
     *
     * Generated from protobuf field <code>string user_pseudo_id = 12;</code>
     */
    protected $user_pseudo_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $serving_config
     *           Required. The resource name of the Search serving config, such as
     *           `projects/&#42;&#47;locations/global/collections/default_collection/engines/&#42;&#47;servingConfigs/default_serving_config`,
     *           or
     *           `projects/&#42;&#47;locations/global/collections/default_collection/dataStores/&#42;&#47;servingConfigs/default_serving_config`.
     *           This field is used to identify the serving configuration name, set
     *           of models used to make the search.
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\Query $query
     *           Required. Current user query.
     *     @type string $session
     *           The session resource name. Not required.
     *           When session field is not set, the API is in sessionless mode.
     *           We support auto session mode: users can use the wildcard symbol `-` as
     *           session ID.  A new ID will be automatically generated and assigned.
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SafetySpec $safety_spec
     *           Model specification.
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\RelatedQuestionsSpec $related_questions_spec
     *           Related questions specification.
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\AnswerGenerationSpec $answer_generation_spec
     *           Answer generation specification.
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec $search_spec
     *           Search specification.
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\QueryUnderstandingSpec $query_understanding_spec
     *           Query understanding specification.
     *     @type bool $asynchronous_mode
     *           Asynchronous mode control.
     *           If enabled, the response will be returned with answer/session resource
     *           name without final answer. The API users need to do the polling to get
     *           the latest status of answer/session by calling
     *           [ConversationalSearchService.GetAnswer][google.cloud.discoveryengine.v1beta.ConversationalSearchService.GetAnswer]
     *           or
     *           [ConversationalSearchService.GetSession][google.cloud.discoveryengine.v1beta.ConversationalSearchService.GetSession]
     *           method.
     *     @type string $user_pseudo_id
     *           A unique identifier for tracking visitors. For example, this could be
     *           implemented with an HTTP cookie, which should be able to uniquely identify
     *           a visitor on a single device. This unique identifier should not change if
     *           the visitor logs in or out of the website.
     *           This field should NOT have a fixed value such as `unknown_visitor`.
     *           The field must be a UTF-8 encoded string with a length limit of 128
     *           characters. Otherwise, an  `INVALID_ARGUMENT`  error is returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\ConversationalSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Search serving config, such as
     * `projects/&#42;&#47;locations/global/collections/default_collection/engines/&#42;&#47;servingConfigs/default_serving_config`,
     * or
     * `projects/&#42;&#47;locations/global/collections/default_collection/dataStores/&#42;&#47;servingConfigs/default_serving_config`.
     * This field is used to identify the serving configuration name, set
     * of models used to make the search.
     *
     * Generated from protobuf field <code>string serving_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getServingConfig()
    {
        return $this->serving_config;
    }

    /**
     * Required. The resource name of the Search serving config, such as
     * `projects/&#42;&#47;locations/global/collections/default_collection/engines/&#42;&#47;servingConfigs/default_serving_config`,
     * or
     * `projects/&#42;&#47;locations/global/collections/default_collection/dataStores/&#42;&#47;servingConfigs/default_serving_config`.
     * This field is used to identify the serving configuration name, set
     * of models used to make the search.
     *
     * Generated from protobuf field <code>string serving_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setServingConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->serving_config = $var;

        return $this;
    }

    /**
     * Required. Current user query.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Query query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\Query|null
     */
    public function getQuery()
    {
        return $this->query;
    }

    public function hasQuery()
    {
        return isset($this->query);
    }

    public function clearQuery()
    {
        unset($this->query);
    }

    /**
     * Required. Current user query.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Query query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\Query $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\Query::class);
        $this->query = $var;

        return $this;
    }

    /**
     * The session resource name. Not required.
     * When session field is not set, the API is in sessionless mode.
     * We support auto session mode: users can use the wildcard symbol `-` as
     * session ID.  A new ID will be automatically generated and assigned.
     *
     * Generated from protobuf field <code>string session = 3 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * The session resource name. Not required.
     * When session field is not set, the API is in sessionless mode.
     * We support auto session mode: users can use the wildcard symbol `-` as
     * session ID.  A new ID will be automatically generated and assigned.
     *
     * Generated from protobuf field <code>string session = 3 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;

        return $this;
    }

    /**
     * Model specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SafetySpec safety_spec = 4;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SafetySpec|null
     */
    public function getSafetySpec()
    {
        return $this->safety_spec;
    }

    public function hasSafetySpec()
    {
        return isset($this->safety_spec);
    }

    public function clearSafetySpec()
    {
        unset($this->safety_spec);
    }

    /**
     * Model specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SafetySpec safety_spec = 4;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SafetySpec $var
     * @return $this
     */
    public function setSafetySpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SafetySpec::class);
        $this->safety_spec = $var;

        return $this;
    }

    /**
     * Related questions specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.RelatedQuestionsSpec related_questions_spec = 5;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\RelatedQuestionsSpec|null
     */
    public function getRelatedQuestionsSpec()
    {
        return $this->related_questions_spec;
    }

    public function hasRelatedQuestionsSpec()
    {
        return isset($this->related_questions_spec);
    }

    public function clearRelatedQuestionsSpec()
    {
        unset($this->related_questions_spec);
    }

    /**
     * Related questions specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.RelatedQuestionsSpec related_questions_spec = 5;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\RelatedQuestionsSpec $var
     * @return $this
     */
    public function setRelatedQuestionsSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\RelatedQuestionsSpec::class);
        $this->related_questions_spec = $var;

        return $this;
    }

    /**
     * Answer generation specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.AnswerGenerationSpec answer_generation_spec = 7;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\AnswerGenerationSpec|null
     */
    public function getAnswerGenerationSpec()
    {
        return $this->answer_generation_spec;
    }

    public function hasAnswerGenerationSpec()
    {
        return isset($this->answer_generation_spec);
    }

    public function clearAnswerGenerationSpec()
    {
        unset($this->answer_generation_spec);
    }

    /**
     * Answer generation specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.AnswerGenerationSpec answer_generation_spec = 7;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\AnswerGenerationSpec $var
     * @return $this
     */
    public function setAnswerGenerationSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\AnswerGenerationSpec::class);
        $this->answer_generation_spec = $var;

        return $this;
    }

    /**
     * Search specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec search_spec = 8;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec|null
     */
    public function getSearchSpec()
    {
        return $this->search_spec;
    }

    public function hasSearchSpec()
    {
        return isset($this->search_spec);
    }

    public function clearSearchSpec()
    {
        unset($this->search_spec);
    }

    /**
     * Search specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec search_spec = 8;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec $var
     * @return $this
     */
    public function setSearchSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec::class);
        $this->search_spec = $var;

        return $this;
    }

    /**
     * Query understanding specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.QueryUnderstandingSpec query_understanding_spec = 9;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\QueryUnderstandingSpec|null
     */
    public function getQueryUnderstandingSpec()
    {
        return $this->query_understanding_spec;
    }

    public function hasQueryUnderstandingSpec()
    {
        return isset($this->query_understanding_spec);
    }

    public function clearQueryUnderstandingSpec()
    {
        unset($this->query_understanding_spec);
    }

    /**
     * Query understanding specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.QueryUnderstandingSpec query_understanding_spec = 9;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\QueryUnderstandingSpec $var
     * @return $this
     */
    public function setQueryUnderstandingSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\QueryUnderstandingSpec::class);
        $this->query_understanding_spec = $var;

        return $this;
    }

    /**
     * Asynchronous mode control.
     * If enabled, the response will be returned with answer/session resource
     * name without final answer. The API users need to do the polling to get
     * the latest status of answer/session by calling
     * [ConversationalSearchService.GetAnswer][google.cloud.discoveryengine.v1beta.ConversationalSearchService.GetAnswer]
     * or
     * [ConversationalSearchService.GetSession][google.cloud.discoveryengine.v1beta.ConversationalSearchService.GetSession]
     * method.
     *
     * Generated from protobuf field <code>bool asynchronous_mode = 10;</code>
     * @return bool
     */
    public function getAsynchronousMode()
    {
        return $this->asynchronous_mode;
    }

    /**
     * Asynchronous mode control.
     * If enabled, the response will be returned with answer/session resource
     * name without final answer. The API users need to do the polling to get
     * the latest status of answer/session by calling
     * [ConversationalSearchService.GetAnswer][google.cloud.discoveryengine.v1beta.ConversationalSearchService.GetAnswer]
     * or
     * [ConversationalSearchService.GetSession][google.cloud.discoveryengine.v1beta.ConversationalSearchService.GetSession]
     * method.
     *
     * Generated from protobuf field <code>bool asynchronous_mode = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setAsynchronousMode($var)
    {
        GPBUtil::checkBool($var);
        $this->asynchronous_mode = $var;

        return $this;
    }

    /**
     * A unique identifier for tracking visitors. For example, this could be
     * implemented with an HTTP cookie, which should be able to uniquely identify
     * a visitor on a single device. This unique identifier should not change if
     * the visitor logs in or out of the website.
     * This field should NOT have a fixed value such as `unknown_visitor`.
     * The field must be a UTF-8 encoded string with a length limit of 128
     * characters. Otherwise, an  `INVALID_ARGUMENT`  error is returned.
     *
     * Generated from protobuf field <code>string user_pseudo_id = 12;</code>
     * @return string
     */
    public function getUserPseudoId()
    {
        return $this->user_pseudo_id;
    }

    /**
     * A unique identifier for tracking visitors. For example, this could be
     * implemented with an HTTP cookie, which should be able to uniquely identify
     * a visitor on a single device. This unique identifier should not change if
     * the visitor logs in or out of the website.
     * This field should NOT have a fixed value such as `unknown_visitor`.
     * The field must be a UTF-8 encoded string with a length limit of 128
     * characters. Otherwise, an  `INVALID_ARGUMENT`  error is returned.
     *
     * Generated from protobuf field <code>string user_pseudo_id = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setUserPseudoId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_pseudo_id = $var;

        return $this;
    }

}

