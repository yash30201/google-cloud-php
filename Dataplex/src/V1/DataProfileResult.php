<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_profile.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DataProfileResult defines the output of DataProfileScan. Each field of the
 * table will have field type specific profile result.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataProfileResult</code>
 */
class DataProfileResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The count of rows scanned.
     *
     * Generated from protobuf field <code>int64 row_count = 3;</code>
     */
    protected $row_count = 0;
    /**
     * The profile information per field.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataProfileResult.Profile profile = 4;</code>
     */
    protected $profile = null;
    /**
     * The data scanned for this result.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.ScannedData scanned_data = 5;</code>
     */
    protected $scanned_data = null;
    /**
     * Output only. The result of post scan actions.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataProfileResult.PostScanActionsResult post_scan_actions_result = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $post_scan_actions_result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $row_count
     *           The count of rows scanned.
     *     @type \Google\Cloud\Dataplex\V1\DataProfileResult\Profile $profile
     *           The profile information per field.
     *     @type \Google\Cloud\Dataplex\V1\ScannedData $scanned_data
     *           The data scanned for this result.
     *     @type \Google\Cloud\Dataplex\V1\DataProfileResult\PostScanActionsResult $post_scan_actions_result
     *           Output only. The result of post scan actions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * The count of rows scanned.
     *
     * Generated from protobuf field <code>int64 row_count = 3;</code>
     * @return int|string
     */
    public function getRowCount()
    {
        return $this->row_count;
    }

    /**
     * The count of rows scanned.
     *
     * Generated from protobuf field <code>int64 row_count = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRowCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->row_count = $var;

        return $this;
    }

    /**
     * The profile information per field.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataProfileResult.Profile profile = 4;</code>
     * @return \Google\Cloud\Dataplex\V1\DataProfileResult\Profile|null
     */
    public function getProfile()
    {
        return $this->profile;
    }

    public function hasProfile()
    {
        return isset($this->profile);
    }

    public function clearProfile()
    {
        unset($this->profile);
    }

    /**
     * The profile information per field.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataProfileResult.Profile profile = 4;</code>
     * @param \Google\Cloud\Dataplex\V1\DataProfileResult\Profile $var
     * @return $this
     */
    public function setProfile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataProfileResult\Profile::class);
        $this->profile = $var;

        return $this;
    }

    /**
     * The data scanned for this result.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.ScannedData scanned_data = 5;</code>
     * @return \Google\Cloud\Dataplex\V1\ScannedData|null
     */
    public function getScannedData()
    {
        return $this->scanned_data;
    }

    public function hasScannedData()
    {
        return isset($this->scanned_data);
    }

    public function clearScannedData()
    {
        unset($this->scanned_data);
    }

    /**
     * The data scanned for this result.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.ScannedData scanned_data = 5;</code>
     * @param \Google\Cloud\Dataplex\V1\ScannedData $var
     * @return $this
     */
    public function setScannedData($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\ScannedData::class);
        $this->scanned_data = $var;

        return $this;
    }

    /**
     * Output only. The result of post scan actions.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataProfileResult.PostScanActionsResult post_scan_actions_result = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataplex\V1\DataProfileResult\PostScanActionsResult|null
     */
    public function getPostScanActionsResult()
    {
        return $this->post_scan_actions_result;
    }

    public function hasPostScanActionsResult()
    {
        return isset($this->post_scan_actions_result);
    }

    public function clearPostScanActionsResult()
    {
        unset($this->post_scan_actions_result);
    }

    /**
     * Output only. The result of post scan actions.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataProfileResult.PostScanActionsResult post_scan_actions_result = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataplex\V1\DataProfileResult\PostScanActionsResult $var
     * @return $this
     */
    public function setPostScanActionsResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataProfileResult\PostScanActionsResult::class);
        $this->post_scan_actions_result = $var;

        return $this;
    }

}

