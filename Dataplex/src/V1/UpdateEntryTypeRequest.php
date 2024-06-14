<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Update EntryType Request
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.UpdateEntryTypeRequest</code>
 */
class UpdateEntryTypeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. EntryType Resource
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.EntryType entry_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $entry_type = null;
    /**
     * Required. Mask of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;
    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;

    /**
     * @param \Google\Cloud\Dataplex\V1\EntryType $entryType  Required. EntryType Resource
     * @param \Google\Protobuf\FieldMask          $updateMask Required. Mask of fields to update.
     *
     * @return \Google\Cloud\Dataplex\V1\UpdateEntryTypeRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Dataplex\V1\EntryType $entryType, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setEntryType($entryType)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataplex\V1\EntryType $entry_type
     *           Required. EntryType Resource
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Mask of fields to update.
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
     * Required. EntryType Resource
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.EntryType entry_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataplex\V1\EntryType|null
     */
    public function getEntryType()
    {
        return $this->entry_type;
    }

    public function hasEntryType()
    {
        return isset($this->entry_type);
    }

    public function clearEntryType()
    {
        unset($this->entry_type);
    }

    /**
     * Required. EntryType Resource
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.EntryType entry_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataplex\V1\EntryType $var
     * @return $this
     */
    public function setEntryType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\EntryType::class);
        $this->entry_type = $var;

        return $this;
    }

    /**
     * Required. Mask of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Mask of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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

