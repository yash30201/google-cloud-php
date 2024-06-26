<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/metadata.proto

namespace Google\Cloud\Dataplex\V1\Schema;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a column field within a table schema.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Schema.SchemaField</code>
 */
class SchemaField extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the field. Must contain only letters, numbers and
     * underscores, with a maximum length of 767 characters,
     * and must begin with a letter or underscore.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Optional. User friendly field description. Must be less than or equal to
     * 1024 characters.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Required. The type of field.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Schema.Type type = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $type = 0;
    /**
     * Required. Additional field semantics.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Schema.Mode mode = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $mode = 0;
    /**
     * Optional. Any nested field for complex types.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.Schema.SchemaField fields = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $fields;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the field. Must contain only letters, numbers and
     *           underscores, with a maximum length of 767 characters,
     *           and must begin with a letter or underscore.
     *     @type string $description
     *           Optional. User friendly field description. Must be less than or equal to
     *           1024 characters.
     *     @type int $type
     *           Required. The type of field.
     *     @type int $mode
     *           Required. Additional field semantics.
     *     @type array<\Google\Cloud\Dataplex\V1\Schema\SchemaField>|\Google\Protobuf\Internal\RepeatedField $fields
     *           Optional. Any nested field for complex types.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Metadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the field. Must contain only letters, numbers and
     * underscores, with a maximum length of 767 characters,
     * and must begin with a letter or underscore.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the field. Must contain only letters, numbers and
     * underscores, with a maximum length of 767 characters,
     * and must begin with a letter or underscore.
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
     * Optional. User friendly field description. Must be less than or equal to
     * 1024 characters.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. User friendly field description. Must be less than or equal to
     * 1024 characters.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Required. The type of field.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Schema.Type type = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. The type of field.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Schema.Type type = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\Schema\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Required. Additional field semantics.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Schema.Mode mode = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Required. Additional field semantics.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Schema.Mode mode = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\Schema\Mode::class);
        $this->mode = $var;

        return $this;
    }

    /**
     * Optional. Any nested field for complex types.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.Schema.SchemaField fields = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Optional. Any nested field for complex types.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.Schema.SchemaField fields = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Dataplex\V1\Schema\SchemaField>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataplex\V1\Schema\SchemaField::class);
        $this->fields = $arr;

        return $this;
    }

}


