<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/telcoautomation/v1/telcoautomation.proto

namespace Google\Cloud\TelcoAutomation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Deployment contains a collection of YAML files (This collection is also known
 * as package) that can to applied on an orchestration cluster (GKE cluster with
 * TNA addons) or a workload cluster.
 *
 * Generated from protobuf message <code>google.cloud.telcoautomation.v1.Deployment</code>
 */
class Deployment extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the deployment.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Output only. Immutable. The revision ID of the deployment.
     * A new revision is committed whenever a change in deployment is applied.
     *
     * Generated from protobuf field <code>string revision_id = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $revision_id = '';
    /**
     * Required. The blueprint revision from which this deployment was created.
     *
     * Generated from protobuf field <code>string source_blueprint_revision = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $source_blueprint_revision = '';
    /**
     * Output only. The timestamp that the revision was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp revision_create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $revision_create_time = null;
    /**
     * Output only. State of the deployment (DRAFT, APPLIED, DELETING).
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.Deployment.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Optional. Human readable name of a Deployment.
     *
     * Generated from protobuf field <code>string display_name = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $display_name = '';
    /**
     * Output only. Name of the repository where the deployment package files are
     * stored.
     *
     * Generated from protobuf field <code>string repository = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $repository = '';
    /**
     * Optional. Files present in a deployment.
     * When invoking UpdateDeployment API, only the modified files should be
     * included in this. Files that are not included in the update of a deployment
     * will not be changed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.telcoautomation.v1.File files = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $files;
    /**
     * Optional. Labels are key-value attributes that can be set on a deployment
     * resource by the user.
     *
     * Generated from protobuf field <code>map<string, string> labels = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Output only. Deployment creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The timestamp when the deployment was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Output only. Source provider is the author of a public blueprint, from
     * which this deployment is created.
     *
     * Generated from protobuf field <code>string source_provider = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $source_provider = '';
    /**
     * Optional. Immutable. The WorkloadCluster on which to create the Deployment.
     * This field should only be passed when the deployment_level of the source
     * blueprint specifies deployments on workload clusters e.g.
     * WORKLOAD_CLUSTER_DEPLOYMENT.
     *
     * Generated from protobuf field <code>string workload_cluster = 13 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $workload_cluster = '';
    /**
     * Output only. Attributes to where the deployment can inflict changes. The
     * value can only be [SINGLE_DEPLOYMENT, MULTI_DEPLOYMENT].
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.DeploymentLevel deployment_level = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $deployment_level = 0;
    /**
     * Output only. Indicates if the deployment can be rolled back, exported from
     * public blueprint.
     *
     * Generated from protobuf field <code>bool rollback_support = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $rollback_support = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the deployment.
     *     @type string $revision_id
     *           Output only. Immutable. The revision ID of the deployment.
     *           A new revision is committed whenever a change in deployment is applied.
     *     @type string $source_blueprint_revision
     *           Required. The blueprint revision from which this deployment was created.
     *     @type \Google\Protobuf\Timestamp $revision_create_time
     *           Output only. The timestamp that the revision was created.
     *     @type int $state
     *           Output only. State of the deployment (DRAFT, APPLIED, DELETING).
     *     @type string $display_name
     *           Optional. Human readable name of a Deployment.
     *     @type string $repository
     *           Output only. Name of the repository where the deployment package files are
     *           stored.
     *     @type array<\Google\Cloud\TelcoAutomation\V1\File>|\Google\Protobuf\Internal\RepeatedField $files
     *           Optional. Files present in a deployment.
     *           When invoking UpdateDeployment API, only the modified files should be
     *           included in this. Files that are not included in the update of a deployment
     *           will not be changed.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Labels are key-value attributes that can be set on a deployment
     *           resource by the user.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Deployment creation time.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The timestamp when the deployment was updated.
     *     @type string $source_provider
     *           Output only. Source provider is the author of a public blueprint, from
     *           which this deployment is created.
     *     @type string $workload_cluster
     *           Optional. Immutable. The WorkloadCluster on which to create the Deployment.
     *           This field should only be passed when the deployment_level of the source
     *           blueprint specifies deployments on workload clusters e.g.
     *           WORKLOAD_CLUSTER_DEPLOYMENT.
     *     @type int $deployment_level
     *           Output only. Attributes to where the deployment can inflict changes. The
     *           value can only be [SINGLE_DEPLOYMENT, MULTI_DEPLOYMENT].
     *     @type bool $rollback_support
     *           Output only. Indicates if the deployment can be rolled back, exported from
     *           public blueprint.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Telcoautomation\V1\Telcoautomation::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the deployment.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the deployment.
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
     * Output only. Immutable. The revision ID of the deployment.
     * A new revision is committed whenever a change in deployment is applied.
     *
     * Generated from protobuf field <code>string revision_id = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getRevisionId()
    {
        return $this->revision_id;
    }

    /**
     * Output only. Immutable. The revision ID of the deployment.
     * A new revision is committed whenever a change in deployment is applied.
     *
     * Generated from protobuf field <code>string revision_id = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setRevisionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->revision_id = $var;

        return $this;
    }

    /**
     * Required. The blueprint revision from which this deployment was created.
     *
     * Generated from protobuf field <code>string source_blueprint_revision = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSourceBlueprintRevision()
    {
        return $this->source_blueprint_revision;
    }

    /**
     * Required. The blueprint revision from which this deployment was created.
     *
     * Generated from protobuf field <code>string source_blueprint_revision = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSourceBlueprintRevision($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_blueprint_revision = $var;

        return $this;
    }

    /**
     * Output only. The timestamp that the revision was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp revision_create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getRevisionCreateTime()
    {
        return $this->revision_create_time;
    }

    public function hasRevisionCreateTime()
    {
        return isset($this->revision_create_time);
    }

    public function clearRevisionCreateTime()
    {
        unset($this->revision_create_time);
    }

    /**
     * Output only. The timestamp that the revision was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp revision_create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRevisionCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->revision_create_time = $var;

        return $this;
    }

    /**
     * Output only. State of the deployment (DRAFT, APPLIED, DELETING).
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.Deployment.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the deployment (DRAFT, APPLIED, DELETING).
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.Deployment.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\TelcoAutomation\V1\Deployment\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Optional. Human readable name of a Deployment.
     *
     * Generated from protobuf field <code>string display_name = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. Human readable name of a Deployment.
     *
     * Generated from protobuf field <code>string display_name = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Output only. Name of the repository where the deployment package files are
     * stored.
     *
     * Generated from protobuf field <code>string repository = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * Output only. Name of the repository where the deployment package files are
     * stored.
     *
     * Generated from protobuf field <code>string repository = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setRepository($var)
    {
        GPBUtil::checkString($var, True);
        $this->repository = $var;

        return $this;
    }

    /**
     * Optional. Files present in a deployment.
     * When invoking UpdateDeployment API, only the modified files should be
     * included in this. Files that are not included in the update of a deployment
     * will not be changed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.telcoautomation.v1.File files = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Optional. Files present in a deployment.
     * When invoking UpdateDeployment API, only the modified files should be
     * included in this. Files that are not included in the update of a deployment
     * will not be changed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.telcoautomation.v1.File files = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\TelcoAutomation\V1\File>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\TelcoAutomation\V1\File::class);
        $this->files = $arr;

        return $this;
    }

    /**
     * Optional. Labels are key-value attributes that can be set on a deployment
     * resource by the user.
     *
     * Generated from protobuf field <code>map<string, string> labels = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Labels are key-value attributes that can be set on a deployment
     * resource by the user.
     *
     * Generated from protobuf field <code>map<string, string> labels = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Output only. Deployment creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Deployment creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The timestamp when the deployment was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The timestamp when the deployment was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. Source provider is the author of a public blueprint, from
     * which this deployment is created.
     *
     * Generated from protobuf field <code>string source_provider = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getSourceProvider()
    {
        return $this->source_provider;
    }

    /**
     * Output only. Source provider is the author of a public blueprint, from
     * which this deployment is created.
     *
     * Generated from protobuf field <code>string source_provider = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setSourceProvider($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_provider = $var;

        return $this;
    }

    /**
     * Optional. Immutable. The WorkloadCluster on which to create the Deployment.
     * This field should only be passed when the deployment_level of the source
     * blueprint specifies deployments on workload clusters e.g.
     * WORKLOAD_CLUSTER_DEPLOYMENT.
     *
     * Generated from protobuf field <code>string workload_cluster = 13 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getWorkloadCluster()
    {
        return $this->workload_cluster;
    }

    /**
     * Optional. Immutable. The WorkloadCluster on which to create the Deployment.
     * This field should only be passed when the deployment_level of the source
     * blueprint specifies deployments on workload clusters e.g.
     * WORKLOAD_CLUSTER_DEPLOYMENT.
     *
     * Generated from protobuf field <code>string workload_cluster = 13 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setWorkloadCluster($var)
    {
        GPBUtil::checkString($var, True);
        $this->workload_cluster = $var;

        return $this;
    }

    /**
     * Output only. Attributes to where the deployment can inflict changes. The
     * value can only be [SINGLE_DEPLOYMENT, MULTI_DEPLOYMENT].
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.DeploymentLevel deployment_level = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getDeploymentLevel()
    {
        return $this->deployment_level;
    }

    /**
     * Output only. Attributes to where the deployment can inflict changes. The
     * value can only be [SINGLE_DEPLOYMENT, MULTI_DEPLOYMENT].
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.DeploymentLevel deployment_level = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setDeploymentLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\TelcoAutomation\V1\DeploymentLevel::class);
        $this->deployment_level = $var;

        return $this;
    }

    /**
     * Output only. Indicates if the deployment can be rolled back, exported from
     * public blueprint.
     *
     * Generated from protobuf field <code>bool rollback_support = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getRollbackSupport()
    {
        return $this->rollback_support;
    }

    /**
     * Output only. Indicates if the deployment can be rolled back, exported from
     * public blueprint.
     *
     * Generated from protobuf field <code>bool rollback_support = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setRollbackSupport($var)
    {
        GPBUtil::checkBool($var);
        $this->rollback_support = $var;

        return $this;
    }

}

