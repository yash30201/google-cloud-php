<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/project.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata and configurations for a Google Cloud project in the service.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.Project</code>
 */
class Project extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Full resource name of the project, for example
     * `projects/{project_number}`.
     * Note that when making requests, project number and project id are both
     * acceptable, but the server will always respond in project number.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. The timestamp when this project is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The timestamp when this project is successfully provisioned.
     * Empty value means this project is still provisioning and is not ready for
     * use.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp provision_completion_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $provision_completion_time = null;
    /**
     * Output only. A map of terms of services. The key is the `id` of
     * [ServiceTerms][google.cloud.discoveryengine.v1beta.Project.ServiceTerms].
     *
     * Generated from protobuf field <code>map<string, .google.cloud.discoveryengine.v1beta.Project.ServiceTerms> service_terms_map = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $service_terms_map;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Full resource name of the project, for example
     *           `projects/{project_number}`.
     *           Note that when making requests, project number and project id are both
     *           acceptable, but the server will always respond in project number.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The timestamp when this project is created.
     *     @type \Google\Protobuf\Timestamp $provision_completion_time
     *           Output only. The timestamp when this project is successfully provisioned.
     *           Empty value means this project is still provisioning and is not ready for
     *           use.
     *     @type array|\Google\Protobuf\Internal\MapField $service_terms_map
     *           Output only. A map of terms of services. The key is the `id` of
     *           [ServiceTerms][google.cloud.discoveryengine.v1beta.Project.ServiceTerms].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\Project::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Full resource name of the project, for example
     * `projects/{project_number}`.
     * Note that when making requests, project number and project id are both
     * acceptable, but the server will always respond in project number.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Full resource name of the project, for example
     * `projects/{project_number}`.
     * Note that when making requests, project number and project id are both
     * acceptable, but the server will always respond in project number.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The timestamp when this project is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The timestamp when this project is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The timestamp when this project is successfully provisioned.
     * Empty value means this project is still provisioning and is not ready for
     * use.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp provision_completion_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getProvisionCompletionTime()
    {
        return $this->provision_completion_time;
    }

    public function hasProvisionCompletionTime()
    {
        return isset($this->provision_completion_time);
    }

    public function clearProvisionCompletionTime()
    {
        unset($this->provision_completion_time);
    }

    /**
     * Output only. The timestamp when this project is successfully provisioned.
     * Empty value means this project is still provisioning and is not ready for
     * use.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp provision_completion_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setProvisionCompletionTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->provision_completion_time = $var;

        return $this;
    }

    /**
     * Output only. A map of terms of services. The key is the `id` of
     * [ServiceTerms][google.cloud.discoveryengine.v1beta.Project.ServiceTerms].
     *
     * Generated from protobuf field <code>map<string, .google.cloud.discoveryengine.v1beta.Project.ServiceTerms> service_terms_map = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getServiceTermsMap()
    {
        return $this->service_terms_map;
    }

    /**
     * Output only. A map of terms of services. The key is the `id` of
     * [ServiceTerms][google.cloud.discoveryengine.v1beta.Project.ServiceTerms].
     *
     * Generated from protobuf field <code>map<string, .google.cloud.discoveryengine.v1beta.Project.ServiceTerms> service_terms_map = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setServiceTermsMap($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1beta\Project\ServiceTerms::class);
        $this->service_terms_map = $arr;

        return $this;
    }

}

