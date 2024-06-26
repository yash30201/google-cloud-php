<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/execution.proto

namespace Google\Cloud\Notebooks\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The definition of a single executed notebook.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v1.Execution</code>
 */
class Execution extends \Google\Protobuf\Internal\Message
{
    /**
     * execute metadata including name, hardware spec, region, labels, etc.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.ExecutionTemplate execution_template = 1;</code>
     */
    protected $execution_template = null;
    /**
     * Output only. The resource name of the execute. Format:
     * `projects/{project_id}/locations/{location}/executions/{execution_id}`
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. Name used for UI purposes.
     * Name can only contain alphanumeric characters and underscores '_'.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $display_name = '';
    /**
     * A brief description of this execution.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     */
    protected $description = '';
    /**
     * Output only. Time the Execution was instantiated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Time the Execution was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Output only. State of the underlying AI Platform job.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.Execution.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output notebook file generated by this execution
     *
     * Generated from protobuf field <code>string output_notebook_file = 8;</code>
     */
    protected $output_notebook_file = '';
    /**
     * Output only. The URI of the external job used to execute the notebook.
     *
     * Generated from protobuf field <code>string job_uri = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $job_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Notebooks\V1\ExecutionTemplate $execution_template
     *           execute metadata including name, hardware spec, region, labels, etc.
     *     @type string $name
     *           Output only. The resource name of the execute. Format:
     *           `projects/{project_id}/locations/{location}/executions/{execution_id}`
     *     @type string $display_name
     *           Output only. Name used for UI purposes.
     *           Name can only contain alphanumeric characters and underscores '_'.
     *     @type string $description
     *           A brief description of this execution.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time the Execution was instantiated.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Time the Execution was last updated.
     *     @type int $state
     *           Output only. State of the underlying AI Platform job.
     *     @type string $output_notebook_file
     *           Output notebook file generated by this execution
     *     @type string $job_uri
     *           Output only. The URI of the external job used to execute the notebook.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V1\Execution::initOnce();
        parent::__construct($data);
    }

    /**
     * execute metadata including name, hardware spec, region, labels, etc.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.ExecutionTemplate execution_template = 1;</code>
     * @return \Google\Cloud\Notebooks\V1\ExecutionTemplate|null
     */
    public function getExecutionTemplate()
    {
        return $this->execution_template;
    }

    public function hasExecutionTemplate()
    {
        return isset($this->execution_template);
    }

    public function clearExecutionTemplate()
    {
        unset($this->execution_template);
    }

    /**
     * execute metadata including name, hardware spec, region, labels, etc.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.ExecutionTemplate execution_template = 1;</code>
     * @param \Google\Cloud\Notebooks\V1\ExecutionTemplate $var
     * @return $this
     */
    public function setExecutionTemplate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Notebooks\V1\ExecutionTemplate::class);
        $this->execution_template = $var;

        return $this;
    }

    /**
     * Output only. The resource name of the execute. Format:
     * `projects/{project_id}/locations/{location}/executions/{execution_id}`
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the execute. Format:
     * `projects/{project_id}/locations/{location}/executions/{execution_id}`
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Name used for UI purposes.
     * Name can only contain alphanumeric characters and underscores '_'.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Output only. Name used for UI purposes.
     * Name can only contain alphanumeric characters and underscores '_'.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * A brief description of this execution.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A brief description of this execution.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. Time the Execution was instantiated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time the Execution was instantiated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time the Execution was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time the Execution was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. State of the underlying AI Platform job.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.Execution.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the underlying AI Platform job.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.Execution.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Notebooks\V1\Execution\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output notebook file generated by this execution
     *
     * Generated from protobuf field <code>string output_notebook_file = 8;</code>
     * @return string
     */
    public function getOutputNotebookFile()
    {
        return $this->output_notebook_file;
    }

    /**
     * Output notebook file generated by this execution
     *
     * Generated from protobuf field <code>string output_notebook_file = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setOutputNotebookFile($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_notebook_file = $var;

        return $this;
    }

    /**
     * Output only. The URI of the external job used to execute the notebook.
     *
     * Generated from protobuf field <code>string job_uri = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getJobUri()
    {
        return $this->job_uri;
    }

    /**
     * Output only. The URI of the external job used to execute the notebook.
     *
     * Generated from protobuf field <code>string job_uri = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setJobUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_uri = $var;

        return $this;
    }

}

