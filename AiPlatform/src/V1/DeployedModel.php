<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/endpoint.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A deployment of a Model. Endpoints contain one or more DeployedModels.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.DeployedModel</code>
 */
class DeployedModel extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The ID of the DeployedModel. If not provided upon deployment,
     * Vertex AI will generate a value for this ID.
     * This value should be 1-10 characters, and valid characters are `/[0-9]/`.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $id = '';
    /**
     * Required. The resource name of the Model that this is the deployment of.
     * Note that the Model may be in a different location than the DeployedModel's
     * Endpoint.
     * The resource name may contain version id or version alias to specify the
     * version.
     *  Example: `projects/{project}/locations/{location}/models/{model}&#64;2`
     *              or
     *            `projects/{project}/locations/{location}/models/{model}&#64;golden`
     * if no version is specified, the default version will be deployed.
     *
     * Generated from protobuf field <code>string model = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $model = '';
    /**
     * Output only. The version ID of the model that is deployed.
     *
     * Generated from protobuf field <code>string model_version_id = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $model_version_id = '';
    /**
     * The display name of the DeployedModel. If not provided upon creation,
     * the Model's display_name is used.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     */
    private $display_name = '';
    /**
     * Output only. Timestamp when the DeployedModel was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Explanation configuration for this DeployedModel.
     * When deploying a Model using
     * [EndpointService.DeployModel][google.cloud.aiplatform.v1.EndpointService.DeployModel],
     * this value overrides the value of
     * [Model.explanation_spec][google.cloud.aiplatform.v1.Model.explanation_spec].
     * All fields of
     * [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec]
     * are optional in the request. If a field of
     * [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec]
     * is not populated, the value of the same field of
     * [Model.explanation_spec][google.cloud.aiplatform.v1.Model.explanation_spec]
     * is inherited. If the corresponding
     * [Model.explanation_spec][google.cloud.aiplatform.v1.Model.explanation_spec]
     * is not populated, all fields of the
     * [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec]
     * will be used for the explanation configuration.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationSpec explanation_spec = 9;</code>
     */
    private $explanation_spec = null;
    /**
     * If true, deploy the model without explainable feature, regardless the
     * existence of
     * [Model.explanation_spec][google.cloud.aiplatform.v1.Model.explanation_spec]
     * or
     * [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec].
     *
     * Generated from protobuf field <code>bool disable_explanations = 19;</code>
     */
    private $disable_explanations = false;
    /**
     * The service account that the DeployedModel's container runs as. Specify the
     * email address of the service account. If this service account is not
     * specified, the container runs as a service account that doesn't have access
     * to the resource project.
     * Users deploying the Model must have the `iam.serviceAccounts.actAs`
     * permission on this service account.
     *
     * Generated from protobuf field <code>string service_account = 11;</code>
     */
    private $service_account = '';
    /**
     * For custom-trained Models and AutoML Tabular Models, the container of the
     * DeployedModel instances will send `stderr` and `stdout` streams to
     * Cloud Logging by default. Please note that the logs incur cost,
     * which are subject to [Cloud Logging
     * pricing](https://cloud.google.com/logging/pricing).
     * User can disable container logging by setting this flag to true.
     *
     * Generated from protobuf field <code>bool disable_container_logging = 15;</code>
     */
    private $disable_container_logging = false;
    /**
     * If true, online prediction access logs are sent to Cloud
     * Logging.
     * These logs are like standard server access logs, containing
     * information like timestamp and latency for each prediction request.
     * Note that logs may incur a cost, especially if your project
     * receives prediction requests at a high queries per second rate (QPS).
     * Estimate your costs before enabling this option.
     *
     * Generated from protobuf field <code>bool enable_access_logging = 13;</code>
     */
    private $enable_access_logging = false;
    /**
     * Output only. Provide paths for users to send predict/explain/health
     * requests directly to the deployed model services running on Cloud via
     * private services access. This field is populated if
     * [network][google.cloud.aiplatform.v1.Endpoint.network] is configured.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PrivateEndpoints private_endpoints = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $private_endpoints = null;
    protected $prediction_resources;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\DedicatedResources $dedicated_resources
     *           A description of resources that are dedicated to the DeployedModel, and
     *           that need a higher degree of manual configuration.
     *     @type \Google\Cloud\AIPlatform\V1\AutomaticResources $automatic_resources
     *           A description of resources that to large degree are decided by Vertex
     *           AI, and require only a modest additional configuration.
     *     @type string $shared_resources
     *           The resource name of the shared DeploymentResourcePool to deploy on.
     *           Format:
     *           `projects/{project}/locations/{location}/deploymentResourcePools/{deployment_resource_pool}`
     *     @type string $id
     *           Immutable. The ID of the DeployedModel. If not provided upon deployment,
     *           Vertex AI will generate a value for this ID.
     *           This value should be 1-10 characters, and valid characters are `/[0-9]/`.
     *     @type string $model
     *           Required. The resource name of the Model that this is the deployment of.
     *           Note that the Model may be in a different location than the DeployedModel's
     *           Endpoint.
     *           The resource name may contain version id or version alias to specify the
     *           version.
     *            Example: `projects/{project}/locations/{location}/models/{model}&#64;2`
     *                        or
     *                      `projects/{project}/locations/{location}/models/{model}&#64;golden`
     *           if no version is specified, the default version will be deployed.
     *     @type string $model_version_id
     *           Output only. The version ID of the model that is deployed.
     *     @type string $display_name
     *           The display name of the DeployedModel. If not provided upon creation,
     *           the Model's display_name is used.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when the DeployedModel was created.
     *     @type \Google\Cloud\AIPlatform\V1\ExplanationSpec $explanation_spec
     *           Explanation configuration for this DeployedModel.
     *           When deploying a Model using
     *           [EndpointService.DeployModel][google.cloud.aiplatform.v1.EndpointService.DeployModel],
     *           this value overrides the value of
     *           [Model.explanation_spec][google.cloud.aiplatform.v1.Model.explanation_spec].
     *           All fields of
     *           [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec]
     *           are optional in the request. If a field of
     *           [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec]
     *           is not populated, the value of the same field of
     *           [Model.explanation_spec][google.cloud.aiplatform.v1.Model.explanation_spec]
     *           is inherited. If the corresponding
     *           [Model.explanation_spec][google.cloud.aiplatform.v1.Model.explanation_spec]
     *           is not populated, all fields of the
     *           [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec]
     *           will be used for the explanation configuration.
     *     @type bool $disable_explanations
     *           If true, deploy the model without explainable feature, regardless the
     *           existence of
     *           [Model.explanation_spec][google.cloud.aiplatform.v1.Model.explanation_spec]
     *           or
     *           [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec].
     *     @type string $service_account
     *           The service account that the DeployedModel's container runs as. Specify the
     *           email address of the service account. If this service account is not
     *           specified, the container runs as a service account that doesn't have access
     *           to the resource project.
     *           Users deploying the Model must have the `iam.serviceAccounts.actAs`
     *           permission on this service account.
     *     @type bool $disable_container_logging
     *           For custom-trained Models and AutoML Tabular Models, the container of the
     *           DeployedModel instances will send `stderr` and `stdout` streams to
     *           Cloud Logging by default. Please note that the logs incur cost,
     *           which are subject to [Cloud Logging
     *           pricing](https://cloud.google.com/logging/pricing).
     *           User can disable container logging by setting this flag to true.
     *     @type bool $enable_access_logging
     *           If true, online prediction access logs are sent to Cloud
     *           Logging.
     *           These logs are like standard server access logs, containing
     *           information like timestamp and latency for each prediction request.
     *           Note that logs may incur a cost, especially if your project
     *           receives prediction requests at a high queries per second rate (QPS).
     *           Estimate your costs before enabling this option.
     *     @type \Google\Cloud\AIPlatform\V1\PrivateEndpoints $private_endpoints
     *           Output only. Provide paths for users to send predict/explain/health
     *           requests directly to the deployed model services running on Cloud via
     *           private services access. This field is populated if
     *           [network][google.cloud.aiplatform.v1.Endpoint.network] is configured.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Endpoint::initOnce();
        parent::__construct($data);
    }

    /**
     * A description of resources that are dedicated to the DeployedModel, and
     * that need a higher degree of manual configuration.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DedicatedResources dedicated_resources = 7;</code>
     * @return \Google\Cloud\AIPlatform\V1\DedicatedResources|null
     */
    public function getDedicatedResources()
    {
        return $this->readOneof(7);
    }

    public function hasDedicatedResources()
    {
        return $this->hasOneof(7);
    }

    /**
     * A description of resources that are dedicated to the DeployedModel, and
     * that need a higher degree of manual configuration.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DedicatedResources dedicated_resources = 7;</code>
     * @param \Google\Cloud\AIPlatform\V1\DedicatedResources $var
     * @return $this
     */
    public function setDedicatedResources($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\DedicatedResources::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * A description of resources that to large degree are decided by Vertex
     * AI, and require only a modest additional configuration.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.AutomaticResources automatic_resources = 8;</code>
     * @return \Google\Cloud\AIPlatform\V1\AutomaticResources|null
     */
    public function getAutomaticResources()
    {
        return $this->readOneof(8);
    }

    public function hasAutomaticResources()
    {
        return $this->hasOneof(8);
    }

    /**
     * A description of resources that to large degree are decided by Vertex
     * AI, and require only a modest additional configuration.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.AutomaticResources automatic_resources = 8;</code>
     * @param \Google\Cloud\AIPlatform\V1\AutomaticResources $var
     * @return $this
     */
    public function setAutomaticResources($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\AutomaticResources::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * The resource name of the shared DeploymentResourcePool to deploy on.
     * Format:
     * `projects/{project}/locations/{location}/deploymentResourcePools/{deployment_resource_pool}`
     *
     * Generated from protobuf field <code>string shared_resources = 17 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSharedResources()
    {
        return $this->readOneof(17);
    }

    public function hasSharedResources()
    {
        return $this->hasOneof(17);
    }

    /**
     * The resource name of the shared DeploymentResourcePool to deploy on.
     * Format:
     * `projects/{project}/locations/{location}/deploymentResourcePools/{deployment_resource_pool}`
     *
     * Generated from protobuf field <code>string shared_resources = 17 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSharedResources($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(17, $var);

        return $this;
    }

    /**
     * Immutable. The ID of the DeployedModel. If not provided upon deployment,
     * Vertex AI will generate a value for this ID.
     * This value should be 1-10 characters, and valid characters are `/[0-9]/`.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Immutable. The ID of the DeployedModel. If not provided upon deployment,
     * Vertex AI will generate a value for this ID.
     * This value should be 1-10 characters, and valid characters are `/[0-9]/`.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Required. The resource name of the Model that this is the deployment of.
     * Note that the Model may be in a different location than the DeployedModel's
     * Endpoint.
     * The resource name may contain version id or version alias to specify the
     * version.
     *  Example: `projects/{project}/locations/{location}/models/{model}&#64;2`
     *              or
     *            `projects/{project}/locations/{location}/models/{model}&#64;golden`
     * if no version is specified, the default version will be deployed.
     *
     * Generated from protobuf field <code>string model = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Required. The resource name of the Model that this is the deployment of.
     * Note that the Model may be in a different location than the DeployedModel's
     * Endpoint.
     * The resource name may contain version id or version alias to specify the
     * version.
     *  Example: `projects/{project}/locations/{location}/models/{model}&#64;2`
     *              or
     *            `projects/{project}/locations/{location}/models/{model}&#64;golden`
     * if no version is specified, the default version will be deployed.
     *
     * Generated from protobuf field <code>string model = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->model = $var;

        return $this;
    }

    /**
     * Output only. The version ID of the model that is deployed.
     *
     * Generated from protobuf field <code>string model_version_id = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getModelVersionId()
    {
        return $this->model_version_id;
    }

    /**
     * Output only. The version ID of the model that is deployed.
     *
     * Generated from protobuf field <code>string model_version_id = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setModelVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_version_id = $var;

        return $this;
    }

    /**
     * The display name of the DeployedModel. If not provided upon creation,
     * the Model's display_name is used.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The display name of the DeployedModel. If not provided upon creation,
     * the Model's display_name is used.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when the DeployedModel was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when the DeployedModel was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Explanation configuration for this DeployedModel.
     * When deploying a Model using
     * [EndpointService.DeployModel][google.cloud.aiplatform.v1.EndpointService.DeployModel],
     * this value overrides the value of
     * [Model.explanation_spec][google.cloud.aiplatform.v1.Model.explanation_spec].
     * All fields of
     * [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec]
     * are optional in the request. If a field of
     * [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec]
     * is not populated, the value of the same field of
     * [Model.explanation_spec][google.cloud.aiplatform.v1.Model.explanation_spec]
     * is inherited. If the corresponding
     * [Model.explanation_spec][google.cloud.aiplatform.v1.Model.explanation_spec]
     * is not populated, all fields of the
     * [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec]
     * will be used for the explanation configuration.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationSpec explanation_spec = 9;</code>
     * @return \Google\Cloud\AIPlatform\V1\ExplanationSpec|null
     */
    public function getExplanationSpec()
    {
        return $this->explanation_spec;
    }

    public function hasExplanationSpec()
    {
        return isset($this->explanation_spec);
    }

    public function clearExplanationSpec()
    {
        unset($this->explanation_spec);
    }

    /**
     * Explanation configuration for this DeployedModel.
     * When deploying a Model using
     * [EndpointService.DeployModel][google.cloud.aiplatform.v1.EndpointService.DeployModel],
     * this value overrides the value of
     * [Model.explanation_spec][google.cloud.aiplatform.v1.Model.explanation_spec].
     * All fields of
     * [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec]
     * are optional in the request. If a field of
     * [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec]
     * is not populated, the value of the same field of
     * [Model.explanation_spec][google.cloud.aiplatform.v1.Model.explanation_spec]
     * is inherited. If the corresponding
     * [Model.explanation_spec][google.cloud.aiplatform.v1.Model.explanation_spec]
     * is not populated, all fields of the
     * [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec]
     * will be used for the explanation configuration.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationSpec explanation_spec = 9;</code>
     * @param \Google\Cloud\AIPlatform\V1\ExplanationSpec $var
     * @return $this
     */
    public function setExplanationSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ExplanationSpec::class);
        $this->explanation_spec = $var;

        return $this;
    }

    /**
     * If true, deploy the model without explainable feature, regardless the
     * existence of
     * [Model.explanation_spec][google.cloud.aiplatform.v1.Model.explanation_spec]
     * or
     * [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec].
     *
     * Generated from protobuf field <code>bool disable_explanations = 19;</code>
     * @return bool
     */
    public function getDisableExplanations()
    {
        return $this->disable_explanations;
    }

    /**
     * If true, deploy the model without explainable feature, regardless the
     * existence of
     * [Model.explanation_spec][google.cloud.aiplatform.v1.Model.explanation_spec]
     * or
     * [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec].
     *
     * Generated from protobuf field <code>bool disable_explanations = 19;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableExplanations($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_explanations = $var;

        return $this;
    }

    /**
     * The service account that the DeployedModel's container runs as. Specify the
     * email address of the service account. If this service account is not
     * specified, the container runs as a service account that doesn't have access
     * to the resource project.
     * Users deploying the Model must have the `iam.serviceAccounts.actAs`
     * permission on this service account.
     *
     * Generated from protobuf field <code>string service_account = 11;</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * The service account that the DeployedModel's container runs as. Specify the
     * email address of the service account. If this service account is not
     * specified, the container runs as a service account that doesn't have access
     * to the resource project.
     * Users deploying the Model must have the `iam.serviceAccounts.actAs`
     * permission on this service account.
     *
     * Generated from protobuf field <code>string service_account = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * For custom-trained Models and AutoML Tabular Models, the container of the
     * DeployedModel instances will send `stderr` and `stdout` streams to
     * Cloud Logging by default. Please note that the logs incur cost,
     * which are subject to [Cloud Logging
     * pricing](https://cloud.google.com/logging/pricing).
     * User can disable container logging by setting this flag to true.
     *
     * Generated from protobuf field <code>bool disable_container_logging = 15;</code>
     * @return bool
     */
    public function getDisableContainerLogging()
    {
        return $this->disable_container_logging;
    }

    /**
     * For custom-trained Models and AutoML Tabular Models, the container of the
     * DeployedModel instances will send `stderr` and `stdout` streams to
     * Cloud Logging by default. Please note that the logs incur cost,
     * which are subject to [Cloud Logging
     * pricing](https://cloud.google.com/logging/pricing).
     * User can disable container logging by setting this flag to true.
     *
     * Generated from protobuf field <code>bool disable_container_logging = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableContainerLogging($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_container_logging = $var;

        return $this;
    }

    /**
     * If true, online prediction access logs are sent to Cloud
     * Logging.
     * These logs are like standard server access logs, containing
     * information like timestamp and latency for each prediction request.
     * Note that logs may incur a cost, especially if your project
     * receives prediction requests at a high queries per second rate (QPS).
     * Estimate your costs before enabling this option.
     *
     * Generated from protobuf field <code>bool enable_access_logging = 13;</code>
     * @return bool
     */
    public function getEnableAccessLogging()
    {
        return $this->enable_access_logging;
    }

    /**
     * If true, online prediction access logs are sent to Cloud
     * Logging.
     * These logs are like standard server access logs, containing
     * information like timestamp and latency for each prediction request.
     * Note that logs may incur a cost, especially if your project
     * receives prediction requests at a high queries per second rate (QPS).
     * Estimate your costs before enabling this option.
     *
     * Generated from protobuf field <code>bool enable_access_logging = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableAccessLogging($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_access_logging = $var;

        return $this;
    }

    /**
     * Output only. Provide paths for users to send predict/explain/health
     * requests directly to the deployed model services running on Cloud via
     * private services access. This field is populated if
     * [network][google.cloud.aiplatform.v1.Endpoint.network] is configured.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PrivateEndpoints private_endpoints = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\PrivateEndpoints|null
     */
    public function getPrivateEndpoints()
    {
        return $this->private_endpoints;
    }

    public function hasPrivateEndpoints()
    {
        return isset($this->private_endpoints);
    }

    public function clearPrivateEndpoints()
    {
        unset($this->private_endpoints);
    }

    /**
     * Output only. Provide paths for users to send predict/explain/health
     * requests directly to the deployed model services running on Cloud via
     * private services access. This field is populated if
     * [network][google.cloud.aiplatform.v1.Endpoint.network] is configured.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PrivateEndpoints private_endpoints = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\PrivateEndpoints $var
     * @return $this
     */
    public function setPrivateEndpoints($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\PrivateEndpoints::class);
        $this->private_endpoints = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getPredictionResources()
    {
        return $this->whichOneof("prediction_resources");
    }

}

