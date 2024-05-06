<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/attachment.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A reference to the data of a drive attachment.
 *
 * Generated from protobuf message <code>google.chat.v1.DriveDataRef</code>
 */
class DriveDataRef extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID for the drive file. Use with the Drive API.
     *
     * Generated from protobuf field <code>string drive_file_id = 2;</code>
     */
    protected $drive_file_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $drive_file_id
     *           The ID for the drive file. Use with the Drive API.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\Attachment::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID for the drive file. Use with the Drive API.
     *
     * Generated from protobuf field <code>string drive_file_id = 2;</code>
     * @return string
     */
    public function getDriveFileId()
    {
        return $this->drive_file_id;
    }

    /**
     * The ID for the drive file. Use with the Drive API.
     *
     * Generated from protobuf field <code>string drive_file_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDriveFileId($var)
    {
        GPBUtil::checkString($var, True);
        $this->drive_file_id = $var;

        return $this;
    }

}

