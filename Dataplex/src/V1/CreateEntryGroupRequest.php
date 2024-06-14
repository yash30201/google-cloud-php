<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Create EntryGroup Request
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.CreateEntryGroupRequest</code>
 */
class CreateEntryGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the entryGroup, of the form:
     * projects/{project_number}/locations/{location_id}
     * where `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. EntryGroup identifier.
     *
     * Generated from protobuf field <code>string entry_group_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $entry_group_id = '';
    /**
     * Required. EntryGroup Resource
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.EntryGroup entry_group = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $entry_group = null;
    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;

    /**
     * @param string                               $parent       Required. The resource name of the entryGroup, of the form:
     *                                                           projects/{project_number}/locations/{location_id}
     *                                                           where `location_id` refers to a GCP region. Please see
     *                                                           {@see CatalogServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\Dataplex\V1\EntryGroup $entryGroup   Required. EntryGroup Resource
     * @param string                               $entryGroupId Required. EntryGroup identifier.
     *
     * @return \Google\Cloud\Dataplex\V1\CreateEntryGroupRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Dataplex\V1\EntryGroup $entryGroup, string $entryGroupId): self
    {
        return (new self())
            ->setParent($parent)
            ->setEntryGroup($entryGroup)
            ->setEntryGroupId($entryGroupId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the entryGroup, of the form:
     *           projects/{project_number}/locations/{location_id}
     *           where `location_id` refers to a GCP region.
     *     @type string $entry_group_id
     *           Required. EntryGroup identifier.
     *     @type \Google\Cloud\Dataplex\V1\EntryGroup $entry_group
     *           Required. EntryGroup Resource
     *     @type bool $validate_only
     *           Optional. Only validate the request, but do not perform mutations.
     *           The default is false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the entryGroup, of the form:
     * projects/{project_number}/locations/{location_id}
     * where `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the entryGroup, of the form:
     * projects/{project_number}/locations/{location_id}
     * where `location_id` refers to a GCP region.
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
     * Required. EntryGroup identifier.
     *
     * Generated from protobuf field <code>string entry_group_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getEntryGroupId()
    {
        return $this->entry_group_id;
    }

    /**
     * Required. EntryGroup identifier.
     *
     * Generated from protobuf field <code>string entry_group_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setEntryGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->entry_group_id = $var;

        return $this;
    }

    /**
     * Required. EntryGroup Resource
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.EntryGroup entry_group = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataplex\V1\EntryGroup|null
     */
    public function getEntryGroup()
    {
        return $this->entry_group;
    }

    public function hasEntryGroup()
    {
        return isset($this->entry_group);
    }

    public function clearEntryGroup()
    {
        unset($this->entry_group);
    }

    /**
     * Required. EntryGroup Resource
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.EntryGroup entry_group = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataplex\V1\EntryGroup $var
     * @return $this
     */
    public function setEntryGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\EntryGroup::class);
        $this->entry_group = $var;

        return $this;
    }

    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

