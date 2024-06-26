<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/artifact.proto

namespace Google\Cloud\ArtifactRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PythonPackage represents a python artifact.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1.PythonPackage</code>
 */
class PythonPackage extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. registry_location, project_id, repository_name and python_package
     * forms a unique package
     * name:`projects/<project_id>/locations/<location>/repository/<repository_name>/pythonPackages/<python_package>`.
     * For example,
     * "projects/test-project/locations/us-west4/repositories/test-repo/pythonPackages/
     * python_package:1.0.0",
     * where "us-west4" is the registry_location, "test-project" is the
     * project_id, "test-repo" is the repository_name and
     * python_package:1.0.0" is the python package.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Required. URL to access the package.
     * Example:
     * us-west4-python.pkg.dev/test-project/test-repo/python_package/file-name-1.0.0.tar.gz
     *
     * Generated from protobuf field <code>string uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $uri = '';
    /**
     * Package for the artifact.
     *
     * Generated from protobuf field <code>string package_name = 3;</code>
     */
    protected $package_name = '';
    /**
     * Version of this package.
     *
     * Generated from protobuf field <code>string version = 4;</code>
     */
    protected $version = '';
    /**
     * Output only. Time the package was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Time the package was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. registry_location, project_id, repository_name and python_package
     *           forms a unique package
     *           name:`projects/<project_id>/locations/<location>/repository/<repository_name>/pythonPackages/<python_package>`.
     *           For example,
     *           "projects/test-project/locations/us-west4/repositories/test-repo/pythonPackages/
     *           python_package:1.0.0",
     *           where "us-west4" is the registry_location, "test-project" is the
     *           project_id, "test-repo" is the repository_name and
     *           python_package:1.0.0" is the python package.
     *     @type string $uri
     *           Required. URL to access the package.
     *           Example:
     *           us-west4-python.pkg.dev/test-project/test-repo/python_package/file-name-1.0.0.tar.gz
     *     @type string $package_name
     *           Package for the artifact.
     *     @type string $version
     *           Version of this package.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time the package was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Time the package was updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1\Artifact::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. registry_location, project_id, repository_name and python_package
     * forms a unique package
     * name:`projects/<project_id>/locations/<location>/repository/<repository_name>/pythonPackages/<python_package>`.
     * For example,
     * "projects/test-project/locations/us-west4/repositories/test-repo/pythonPackages/
     * python_package:1.0.0",
     * where "us-west4" is the registry_location, "test-project" is the
     * project_id, "test-repo" is the repository_name and
     * python_package:1.0.0" is the python package.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. registry_location, project_id, repository_name and python_package
     * forms a unique package
     * name:`projects/<project_id>/locations/<location>/repository/<repository_name>/pythonPackages/<python_package>`.
     * For example,
     * "projects/test-project/locations/us-west4/repositories/test-repo/pythonPackages/
     * python_package:1.0.0",
     * where "us-west4" is the registry_location, "test-project" is the
     * project_id, "test-repo" is the repository_name and
     * python_package:1.0.0" is the python package.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. URL to access the package.
     * Example:
     * us-west4-python.pkg.dev/test-project/test-repo/python_package/file-name-1.0.0.tar.gz
     *
     * Generated from protobuf field <code>string uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Required. URL to access the package.
     * Example:
     * us-west4-python.pkg.dev/test-project/test-repo/python_package/file-name-1.0.0.tar.gz
     *
     * Generated from protobuf field <code>string uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Package for the artifact.
     *
     * Generated from protobuf field <code>string package_name = 3;</code>
     * @return string
     */
    public function getPackageName()
    {
        return $this->package_name;
    }

    /**
     * Package for the artifact.
     *
     * Generated from protobuf field <code>string package_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPackageName($var)
    {
        GPBUtil::checkString($var, True);
        $this->package_name = $var;

        return $this;
    }

    /**
     * Version of this package.
     *
     * Generated from protobuf field <code>string version = 4;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Version of this package.
     *
     * Generated from protobuf field <code>string version = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Output only. Time the package was created.
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
     * Output only. Time the package was created.
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
     * Output only. Time the package was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time the package was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

}

