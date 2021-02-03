<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.FileContentBuffer</code>
 */
class FileContentBuffer extends \Google\Protobuf\Internal\Message
{
    /**
     * The raw content in the secure keys file.
     *
     * Generated from protobuf field <code>string content = 146224249;</code>
     */
    private $content = '';
    /**
     * The file type of source file.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.FileContentBuffer.FileType file_type = 25911325;</code>
     */
    private $file_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $content
     *           The raw content in the secure keys file.
     *     @type int $file_type
     *           The file type of source file.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The raw content in the secure keys file.
     *
     * Generated from protobuf field <code>string content = 146224249;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * The raw content in the secure keys file.
     *
     * Generated from protobuf field <code>string content = 146224249;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;

        return $this;
    }

    /**
     * The file type of source file.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.FileContentBuffer.FileType file_type = 25911325;</code>
     * @return int
     */
    public function getFileType()
    {
        return $this->file_type;
    }

    /**
     * The file type of source file.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.FileContentBuffer.FileType file_type = 25911325;</code>
     * @param int $var
     * @return $this
     */
    public function setFileType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\FileContentBuffer\FileType::class);
        $this->file_type = $var;

        return $this;
    }

}
