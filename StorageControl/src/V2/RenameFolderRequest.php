<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storage/control/v2/storage_control.proto

namespace Google\Cloud\Storage\Control\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for RenameFolder. This operation is only applicable to a
 * hierarchical namespace enabled bucket.
 * Hierarchical namespace buckets are in allowlist preview.
 *
 * Generated from protobuf message <code>google.storage.control.v2.RenameFolderRequest</code>
 */
class RenameFolderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the source folder being renamed.
     * Format: `projects/{project}/buckets/{bucket}/folders/{folder}`
     *
     * Generated from protobuf field <code>string name = 7 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. The destination folder ID, e.g. `foo/bar/`.
     *
     * Generated from protobuf field <code>string destination_folder_id = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $destination_folder_id = '';
    /**
     * Makes the operation only succeed conditional on whether the source
     * folder's current metageneration matches the given value.
     *
     * Generated from protobuf field <code>optional int64 if_metageneration_match = 4;</code>
     */
    protected $if_metageneration_match = null;
    /**
     * Makes the operation only succeed conditional on whether the source
     * folder's current metageneration does not match the given value.
     *
     * Generated from protobuf field <code>optional int64 if_metageneration_not_match = 5;</code>
     */
    protected $if_metageneration_not_match = null;
    /**
     * Optional. A unique identifier for this request. UUID is the recommended
     * format, but other formats are still accepted. This request is only
     * idempotent if a `request_id` is provided.
     *
     * Generated from protobuf field <code>string request_id = 6 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     */
    protected $request_id = '';

    /**
     * @param string $name                Required. Name of the source folder being renamed.
     *                                    Format: `projects/{project}/buckets/{bucket}/folders/{folder}`
     *                                    Please see {@see StorageControlClient::folderName()} for help formatting this field.
     * @param string $destinationFolderId Required. The destination folder ID, e.g. `foo/bar/`.
     *
     * @return \Google\Cloud\Storage\Control\V2\RenameFolderRequest
     *
     * @experimental
     */
    public static function build(string $name, string $destinationFolderId): self
    {
        return (new self())
            ->setName($name)
            ->setDestinationFolderId($destinationFolderId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the source folder being renamed.
     *           Format: `projects/{project}/buckets/{bucket}/folders/{folder}`
     *     @type string $destination_folder_id
     *           Required. The destination folder ID, e.g. `foo/bar/`.
     *     @type int|string $if_metageneration_match
     *           Makes the operation only succeed conditional on whether the source
     *           folder's current metageneration matches the given value.
     *     @type int|string $if_metageneration_not_match
     *           Makes the operation only succeed conditional on whether the source
     *           folder's current metageneration does not match the given value.
     *     @type string $request_id
     *           Optional. A unique identifier for this request. UUID is the recommended
     *           format, but other formats are still accepted. This request is only
     *           idempotent if a `request_id` is provided.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storage\Control\V2\StorageControl::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the source folder being renamed.
     * Format: `projects/{project}/buckets/{bucket}/folders/{folder}`
     *
     * Generated from protobuf field <code>string name = 7 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the source folder being renamed.
     * Format: `projects/{project}/buckets/{bucket}/folders/{folder}`
     *
     * Generated from protobuf field <code>string name = 7 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The destination folder ID, e.g. `foo/bar/`.
     *
     * Generated from protobuf field <code>string destination_folder_id = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDestinationFolderId()
    {
        return $this->destination_folder_id;
    }

    /**
     * Required. The destination folder ID, e.g. `foo/bar/`.
     *
     * Generated from protobuf field <code>string destination_folder_id = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationFolderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_folder_id = $var;

        return $this;
    }

    /**
     * Makes the operation only succeed conditional on whether the source
     * folder's current metageneration matches the given value.
     *
     * Generated from protobuf field <code>optional int64 if_metageneration_match = 4;</code>
     * @return int|string
     */
    public function getIfMetagenerationMatch()
    {
        return isset($this->if_metageneration_match) ? $this->if_metageneration_match : 0;
    }

    public function hasIfMetagenerationMatch()
    {
        return isset($this->if_metageneration_match);
    }

    public function clearIfMetagenerationMatch()
    {
        unset($this->if_metageneration_match);
    }

    /**
     * Makes the operation only succeed conditional on whether the source
     * folder's current metageneration matches the given value.
     *
     * Generated from protobuf field <code>optional int64 if_metageneration_match = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIfMetagenerationMatch($var)
    {
        GPBUtil::checkInt64($var);
        $this->if_metageneration_match = $var;

        return $this;
    }

    /**
     * Makes the operation only succeed conditional on whether the source
     * folder's current metageneration does not match the given value.
     *
     * Generated from protobuf field <code>optional int64 if_metageneration_not_match = 5;</code>
     * @return int|string
     */
    public function getIfMetagenerationNotMatch()
    {
        return isset($this->if_metageneration_not_match) ? $this->if_metageneration_not_match : 0;
    }

    public function hasIfMetagenerationNotMatch()
    {
        return isset($this->if_metageneration_not_match);
    }

    public function clearIfMetagenerationNotMatch()
    {
        unset($this->if_metageneration_not_match);
    }

    /**
     * Makes the operation only succeed conditional on whether the source
     * folder's current metageneration does not match the given value.
     *
     * Generated from protobuf field <code>optional int64 if_metageneration_not_match = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIfMetagenerationNotMatch($var)
    {
        GPBUtil::checkInt64($var);
        $this->if_metageneration_not_match = $var;

        return $this;
    }

    /**
     * Optional. A unique identifier for this request. UUID is the recommended
     * format, but other formats are still accepted. This request is only
     * idempotent if a `request_id` is provided.
     *
     * Generated from protobuf field <code>string request_id = 6 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A unique identifier for this request. UUID is the recommended
     * format, but other formats are still accepted. This request is only
     * idempotent if a `request_id` is provided.
     *
     * Generated from protobuf field <code>string request_id = 6 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

