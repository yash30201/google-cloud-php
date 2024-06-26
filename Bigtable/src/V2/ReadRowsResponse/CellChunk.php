<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/bigtable.proto

namespace Google\Cloud\Bigtable\V2\ReadRowsResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies a piece of a row's contents returned as part of the read
 * response stream.
 *
 * Generated from protobuf message <code>google.bigtable.v2.ReadRowsResponse.CellChunk</code>
 */
class CellChunk extends \Google\Protobuf\Internal\Message
{
    /**
     * The row key for this chunk of data.  If the row key is empty,
     * this CellChunk is a continuation of the same row as the previous
     * CellChunk in the response stream, even if that CellChunk was in a
     * previous ReadRowsResponse message.
     *
     * Generated from protobuf field <code>bytes row_key = 1;</code>
     */
    protected $row_key = '';
    /**
     * The column family name for this chunk of data.  If this message
     * is not present this CellChunk is a continuation of the same column
     * family as the previous CellChunk.  The empty string can occur as a
     * column family name in a response so clients must check
     * explicitly for the presence of this message, not just for
     * `family_name.value` being non-empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue family_name = 2;</code>
     */
    protected $family_name = null;
    /**
     * The column qualifier for this chunk of data.  If this message
     * is not present, this CellChunk is a continuation of the same column
     * as the previous CellChunk.  Column qualifiers may be empty so
     * clients must check for the presence of this message, not just
     * for `qualifier.value` being non-empty.
     *
     * Generated from protobuf field <code>.google.protobuf.BytesValue qualifier = 3;</code>
     */
    protected $qualifier = null;
    /**
     * The cell's stored timestamp, which also uniquely identifies it
     * within its column.  Values are always expressed in
     * microseconds, but individual tables may set a coarser
     * granularity to further restrict the allowed values. For
     * example, a table which specifies millisecond granularity will
     * only allow values of `timestamp_micros` which are multiples of
     * 1000.  Timestamps are only set in the first CellChunk per cell
     * (for cells split into multiple chunks).
     *
     * Generated from protobuf field <code>int64 timestamp_micros = 4;</code>
     */
    protected $timestamp_micros = 0;
    /**
     * Labels applied to the cell by a
     * [RowFilter][google.bigtable.v2.RowFilter].  Labels are only set
     * on the first CellChunk per cell.
     *
     * Generated from protobuf field <code>repeated string labels = 5;</code>
     */
    private $labels;
    /**
     * The value stored in the cell.  Cell values can be split across
     * multiple CellChunks.  In that case only the value field will be
     * set in CellChunks after the first: the timestamp and labels
     * will only be present in the first CellChunk, even if the first
     * CellChunk came in a previous ReadRowsResponse.
     *
     * Generated from protobuf field <code>bytes value = 6;</code>
     */
    protected $value = '';
    /**
     * If this CellChunk is part of a chunked cell value and this is
     * not the final chunk of that cell, value_size will be set to the
     * total length of the cell value.  The client can use this size
     * to pre-allocate memory to hold the full cell value.
     *
     * Generated from protobuf field <code>int32 value_size = 7;</code>
     */
    protected $value_size = 0;
    protected $row_status;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $row_key
     *           The row key for this chunk of data.  If the row key is empty,
     *           this CellChunk is a continuation of the same row as the previous
     *           CellChunk in the response stream, even if that CellChunk was in a
     *           previous ReadRowsResponse message.
     *     @type \Google\Protobuf\StringValue $family_name
     *           The column family name for this chunk of data.  If this message
     *           is not present this CellChunk is a continuation of the same column
     *           family as the previous CellChunk.  The empty string can occur as a
     *           column family name in a response so clients must check
     *           explicitly for the presence of this message, not just for
     *           `family_name.value` being non-empty.
     *     @type \Google\Protobuf\BytesValue $qualifier
     *           The column qualifier for this chunk of data.  If this message
     *           is not present, this CellChunk is a continuation of the same column
     *           as the previous CellChunk.  Column qualifiers may be empty so
     *           clients must check for the presence of this message, not just
     *           for `qualifier.value` being non-empty.
     *     @type int|string $timestamp_micros
     *           The cell's stored timestamp, which also uniquely identifies it
     *           within its column.  Values are always expressed in
     *           microseconds, but individual tables may set a coarser
     *           granularity to further restrict the allowed values. For
     *           example, a table which specifies millisecond granularity will
     *           only allow values of `timestamp_micros` which are multiples of
     *           1000.  Timestamps are only set in the first CellChunk per cell
     *           (for cells split into multiple chunks).
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $labels
     *           Labels applied to the cell by a
     *           [RowFilter][google.bigtable.v2.RowFilter].  Labels are only set
     *           on the first CellChunk per cell.
     *     @type string $value
     *           The value stored in the cell.  Cell values can be split across
     *           multiple CellChunks.  In that case only the value field will be
     *           set in CellChunks after the first: the timestamp and labels
     *           will only be present in the first CellChunk, even if the first
     *           CellChunk came in a previous ReadRowsResponse.
     *     @type int $value_size
     *           If this CellChunk is part of a chunked cell value and this is
     *           not the final chunk of that cell, value_size will be set to the
     *           total length of the cell value.  The client can use this size
     *           to pre-allocate memory to hold the full cell value.
     *     @type bool $reset_row
     *           Indicates that the client should drop all previous chunks for
     *           `row_key`, as it will be re-read from the beginning.
     *     @type bool $commit_row
     *           Indicates that the client can safely process all previous chunks for
     *           `row_key`, as its data has been fully read.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Bigtable::initOnce();
        parent::__construct($data);
    }

    /**
     * The row key for this chunk of data.  If the row key is empty,
     * this CellChunk is a continuation of the same row as the previous
     * CellChunk in the response stream, even if that CellChunk was in a
     * previous ReadRowsResponse message.
     *
     * Generated from protobuf field <code>bytes row_key = 1;</code>
     * @return string
     */
    public function getRowKey()
    {
        return $this->row_key;
    }

    /**
     * The row key for this chunk of data.  If the row key is empty,
     * this CellChunk is a continuation of the same row as the previous
     * CellChunk in the response stream, even if that CellChunk was in a
     * previous ReadRowsResponse message.
     *
     * Generated from protobuf field <code>bytes row_key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRowKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->row_key = $var;

        return $this;
    }

    /**
     * The column family name for this chunk of data.  If this message
     * is not present this CellChunk is a continuation of the same column
     * family as the previous CellChunk.  The empty string can occur as a
     * column family name in a response so clients must check
     * explicitly for the presence of this message, not just for
     * `family_name.value` being non-empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue family_name = 2;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getFamilyName()
    {
        return $this->family_name;
    }

    public function hasFamilyName()
    {
        return isset($this->family_name);
    }

    public function clearFamilyName()
    {
        unset($this->family_name);
    }

    /**
     * Returns the unboxed value from <code>getFamilyName()</code>

     * The column family name for this chunk of data.  If this message
     * is not present this CellChunk is a continuation of the same column
     * family as the previous CellChunk.  The empty string can occur as a
     * column family name in a response so clients must check
     * explicitly for the presence of this message, not just for
     * `family_name.value` being non-empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue family_name = 2;</code>
     * @return string|null
     */
    public function getFamilyNameUnwrapped()
    {
        return $this->readWrapperValue("family_name");
    }

    /**
     * The column family name for this chunk of data.  If this message
     * is not present this CellChunk is a continuation of the same column
     * family as the previous CellChunk.  The empty string can occur as a
     * column family name in a response so clients must check
     * explicitly for the presence of this message, not just for
     * `family_name.value` being non-empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue family_name = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setFamilyName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->family_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The column family name for this chunk of data.  If this message
     * is not present this CellChunk is a continuation of the same column
     * family as the previous CellChunk.  The empty string can occur as a
     * column family name in a response so clients must check
     * explicitly for the presence of this message, not just for
     * `family_name.value` being non-empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue family_name = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setFamilyNameUnwrapped($var)
    {
        $this->writeWrapperValue("family_name", $var);
        return $this;}

    /**
     * The column qualifier for this chunk of data.  If this message
     * is not present, this CellChunk is a continuation of the same column
     * as the previous CellChunk.  Column qualifiers may be empty so
     * clients must check for the presence of this message, not just
     * for `qualifier.value` being non-empty.
     *
     * Generated from protobuf field <code>.google.protobuf.BytesValue qualifier = 3;</code>
     * @return \Google\Protobuf\BytesValue|null
     */
    public function getQualifier()
    {
        return $this->qualifier;
    }

    public function hasQualifier()
    {
        return isset($this->qualifier);
    }

    public function clearQualifier()
    {
        unset($this->qualifier);
    }

    /**
     * Returns the unboxed value from <code>getQualifier()</code>

     * The column qualifier for this chunk of data.  If this message
     * is not present, this CellChunk is a continuation of the same column
     * as the previous CellChunk.  Column qualifiers may be empty so
     * clients must check for the presence of this message, not just
     * for `qualifier.value` being non-empty.
     *
     * Generated from protobuf field <code>.google.protobuf.BytesValue qualifier = 3;</code>
     * @return string|null
     */
    public function getQualifierUnwrapped()
    {
        return $this->readWrapperValue("qualifier");
    }

    /**
     * The column qualifier for this chunk of data.  If this message
     * is not present, this CellChunk is a continuation of the same column
     * as the previous CellChunk.  Column qualifiers may be empty so
     * clients must check for the presence of this message, not just
     * for `qualifier.value` being non-empty.
     *
     * Generated from protobuf field <code>.google.protobuf.BytesValue qualifier = 3;</code>
     * @param \Google\Protobuf\BytesValue $var
     * @return $this
     */
    public function setQualifier($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BytesValue::class);
        $this->qualifier = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BytesValue object.

     * The column qualifier for this chunk of data.  If this message
     * is not present, this CellChunk is a continuation of the same column
     * as the previous CellChunk.  Column qualifiers may be empty so
     * clients must check for the presence of this message, not just
     * for `qualifier.value` being non-empty.
     *
     * Generated from protobuf field <code>.google.protobuf.BytesValue qualifier = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setQualifierUnwrapped($var)
    {
        $this->writeWrapperValue("qualifier", $var);
        return $this;}

    /**
     * The cell's stored timestamp, which also uniquely identifies it
     * within its column.  Values are always expressed in
     * microseconds, but individual tables may set a coarser
     * granularity to further restrict the allowed values. For
     * example, a table which specifies millisecond granularity will
     * only allow values of `timestamp_micros` which are multiples of
     * 1000.  Timestamps are only set in the first CellChunk per cell
     * (for cells split into multiple chunks).
     *
     * Generated from protobuf field <code>int64 timestamp_micros = 4;</code>
     * @return int|string
     */
    public function getTimestampMicros()
    {
        return $this->timestamp_micros;
    }

    /**
     * The cell's stored timestamp, which also uniquely identifies it
     * within its column.  Values are always expressed in
     * microseconds, but individual tables may set a coarser
     * granularity to further restrict the allowed values. For
     * example, a table which specifies millisecond granularity will
     * only allow values of `timestamp_micros` which are multiples of
     * 1000.  Timestamps are only set in the first CellChunk per cell
     * (for cells split into multiple chunks).
     *
     * Generated from protobuf field <code>int64 timestamp_micros = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestampMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp_micros = $var;

        return $this;
    }

    /**
     * Labels applied to the cell by a
     * [RowFilter][google.bigtable.v2.RowFilter].  Labels are only set
     * on the first CellChunk per cell.
     *
     * Generated from protobuf field <code>repeated string labels = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels applied to the cell by a
     * [RowFilter][google.bigtable.v2.RowFilter].  Labels are only set
     * on the first CellChunk per cell.
     *
     * Generated from protobuf field <code>repeated string labels = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * The value stored in the cell.  Cell values can be split across
     * multiple CellChunks.  In that case only the value field will be
     * set in CellChunks after the first: the timestamp and labels
     * will only be present in the first CellChunk, even if the first
     * CellChunk came in a previous ReadRowsResponse.
     *
     * Generated from protobuf field <code>bytes value = 6;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The value stored in the cell.  Cell values can be split across
     * multiple CellChunks.  In that case only the value field will be
     * set in CellChunks after the first: the timestamp and labels
     * will only be present in the first CellChunk, even if the first
     * CellChunk came in a previous ReadRowsResponse.
     *
     * Generated from protobuf field <code>bytes value = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->value = $var;

        return $this;
    }

    /**
     * If this CellChunk is part of a chunked cell value and this is
     * not the final chunk of that cell, value_size will be set to the
     * total length of the cell value.  The client can use this size
     * to pre-allocate memory to hold the full cell value.
     *
     * Generated from protobuf field <code>int32 value_size = 7;</code>
     * @return int
     */
    public function getValueSize()
    {
        return $this->value_size;
    }

    /**
     * If this CellChunk is part of a chunked cell value and this is
     * not the final chunk of that cell, value_size will be set to the
     * total length of the cell value.  The client can use this size
     * to pre-allocate memory to hold the full cell value.
     *
     * Generated from protobuf field <code>int32 value_size = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setValueSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->value_size = $var;

        return $this;
    }

    /**
     * Indicates that the client should drop all previous chunks for
     * `row_key`, as it will be re-read from the beginning.
     *
     * Generated from protobuf field <code>bool reset_row = 8;</code>
     * @return bool
     */
    public function getResetRow()
    {
        return $this->readOneof(8);
    }

    public function hasResetRow()
    {
        return $this->hasOneof(8);
    }

    /**
     * Indicates that the client should drop all previous chunks for
     * `row_key`, as it will be re-read from the beginning.
     *
     * Generated from protobuf field <code>bool reset_row = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setResetRow($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Indicates that the client can safely process all previous chunks for
     * `row_key`, as its data has been fully read.
     *
     * Generated from protobuf field <code>bool commit_row = 9;</code>
     * @return bool
     */
    public function getCommitRow()
    {
        return $this->readOneof(9);
    }

    public function hasCommitRow()
    {
        return $this->hasOneof(9);
    }

    /**
     * Indicates that the client can safely process all previous chunks for
     * `row_key`, as its data has been fully read.
     *
     * Generated from protobuf field <code>bool commit_row = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setCommitRow($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getRowStatus()
    {
        return $this->whichOneof("row_status");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CellChunk::class, \Google\Cloud\Bigtable\V2\ReadRowsResponse_CellChunk::class);

