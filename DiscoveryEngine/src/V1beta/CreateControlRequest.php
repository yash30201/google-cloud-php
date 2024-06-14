<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/control_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for CreateControl method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.CreateControlRequest</code>
 */
class CreateControlRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Full resource name of parent data store. Format:
     * `projects/{project_number}/locations/{location_id}/collections/{collection_id}/dataStores/{data_store_id}`
     * or
     * `projects/{project_number}/locations/{location_id}/collections/{collection_id}/engines/{engine_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The Control to create.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Control control = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $control = null;
    /**
     * Required. The ID to use for the Control, which will become the final
     * component of the Control's resource name.
     * This value must be within 1-63 characters.
     * Valid characters are /[a-z][0-9]-_/.
     *
     * Generated from protobuf field <code>string control_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $control_id = '';

    /**
     * @param string                                       $parent    Required. Full resource name of parent data store. Format:
     *                                                                `projects/{project_number}/locations/{location_id}/collections/{collection_id}/dataStores/{data_store_id}`
     *                                                                or
     *                                                                `projects/{project_number}/locations/{location_id}/collections/{collection_id}/engines/{engine_id}`. Please see
     *                                                                {@see ControlServiceClient::dataStoreName()} for help formatting this field.
     * @param \Google\Cloud\DiscoveryEngine\V1beta\Control $control   Required. The Control to create.
     * @param string                                       $controlId Required. The ID to use for the Control, which will become the final
     *                                                                component of the Control's resource name.
     *
     *                                                                This value must be within 1-63 characters.
     *                                                                Valid characters are /[a-z][0-9]-_/.
     *
     * @return \Google\Cloud\DiscoveryEngine\V1beta\CreateControlRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\DiscoveryEngine\V1beta\Control $control, string $controlId): self
    {
        return (new self())
            ->setParent($parent)
            ->setControl($control)
            ->setControlId($controlId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Full resource name of parent data store. Format:
     *           `projects/{project_number}/locations/{location_id}/collections/{collection_id}/dataStores/{data_store_id}`
     *           or
     *           `projects/{project_number}/locations/{location_id}/collections/{collection_id}/engines/{engine_id}`.
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\Control $control
     *           Required. The Control to create.
     *     @type string $control_id
     *           Required. The ID to use for the Control, which will become the final
     *           component of the Control's resource name.
     *           This value must be within 1-63 characters.
     *           Valid characters are /[a-z][0-9]-_/.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\ControlService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Full resource name of parent data store. Format:
     * `projects/{project_number}/locations/{location_id}/collections/{collection_id}/dataStores/{data_store_id}`
     * or
     * `projects/{project_number}/locations/{location_id}/collections/{collection_id}/engines/{engine_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Full resource name of parent data store. Format:
     * `projects/{project_number}/locations/{location_id}/collections/{collection_id}/dataStores/{data_store_id}`
     * or
     * `projects/{project_number}/locations/{location_id}/collections/{collection_id}/engines/{engine_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The Control to create.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Control control = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\Control|null
     */
    public function getControl()
    {
        return $this->control;
    }

    public function hasControl()
    {
        return isset($this->control);
    }

    public function clearControl()
    {
        unset($this->control);
    }

    /**
     * Required. The Control to create.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Control control = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\Control $var
     * @return $this
     */
    public function setControl($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\Control::class);
        $this->control = $var;

        return $this;
    }

    /**
     * Required. The ID to use for the Control, which will become the final
     * component of the Control's resource name.
     * This value must be within 1-63 characters.
     * Valid characters are /[a-z][0-9]-_/.
     *
     * Generated from protobuf field <code>string control_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getControlId()
    {
        return $this->control_id;
    }

    /**
     * Required. The ID to use for the Control, which will become the final
     * component of the Control's resource name.
     * This value must be within 1-63 characters.
     * Valid characters are /[a-z][0-9]-_/.
     *
     * Generated from protobuf field <code>string control_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setControlId($var)
    {
        GPBUtil::checkString($var, True);
        $this->control_id = $var;

        return $this;
    }

}

