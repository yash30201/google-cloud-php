<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/trace.proto

namespace Google\Cloud\NetworkManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of the final state "drop" and associated resource.
 *
 * Generated from protobuf message <code>google.cloud.networkmanagement.v1.DropInfo</code>
 */
class DropInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Cause that the packet is dropped.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.DropInfo.Cause cause = 1;</code>
     */
    private $cause = 0;
    /**
     * URI of the resource that caused the drop.
     *
     * Generated from protobuf field <code>string resource_uri = 2;</code>
     */
    private $resource_uri = '';
    /**
     * Source IP address of the dropped packet (if relevant).
     *
     * Generated from protobuf field <code>string source_ip = 3;</code>
     */
    private $source_ip = '';
    /**
     * Destination IP address of the dropped packet (if relevant).
     *
     * Generated from protobuf field <code>string destination_ip = 4;</code>
     */
    private $destination_ip = '';
    /**
     * Region of the dropped packet (if relevant).
     *
     * Generated from protobuf field <code>string region = 5;</code>
     */
    private $region = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $cause
     *           Cause that the packet is dropped.
     *     @type string $resource_uri
     *           URI of the resource that caused the drop.
     *     @type string $source_ip
     *           Source IP address of the dropped packet (if relevant).
     *     @type string $destination_ip
     *           Destination IP address of the dropped packet (if relevant).
     *     @type string $region
     *           Region of the dropped packet (if relevant).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkmanagement\V1\Trace::initOnce();
        parent::__construct($data);
    }

    /**
     * Cause that the packet is dropped.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.DropInfo.Cause cause = 1;</code>
     * @return int
     */
    public function getCause()
    {
        return $this->cause;
    }

    /**
     * Cause that the packet is dropped.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.DropInfo.Cause cause = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCause($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetworkManagement\V1\DropInfo\Cause::class);
        $this->cause = $var;

        return $this;
    }

    /**
     * URI of the resource that caused the drop.
     *
     * Generated from protobuf field <code>string resource_uri = 2;</code>
     * @return string
     */
    public function getResourceUri()
    {
        return $this->resource_uri;
    }

    /**
     * URI of the resource that caused the drop.
     *
     * Generated from protobuf field <code>string resource_uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_uri = $var;

        return $this;
    }

    /**
     * Source IP address of the dropped packet (if relevant).
     *
     * Generated from protobuf field <code>string source_ip = 3;</code>
     * @return string
     */
    public function getSourceIp()
    {
        return $this->source_ip;
    }

    /**
     * Source IP address of the dropped packet (if relevant).
     *
     * Generated from protobuf field <code>string source_ip = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_ip = $var;

        return $this;
    }

    /**
     * Destination IP address of the dropped packet (if relevant).
     *
     * Generated from protobuf field <code>string destination_ip = 4;</code>
     * @return string
     */
    public function getDestinationIp()
    {
        return $this->destination_ip;
    }

    /**
     * Destination IP address of the dropped packet (if relevant).
     *
     * Generated from protobuf field <code>string destination_ip = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_ip = $var;

        return $this;
    }

    /**
     * Region of the dropped packet (if relevant).
     *
     * Generated from protobuf field <code>string region = 5;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Region of the dropped packet (if relevant).
     *
     * Generated from protobuf field <code>string region = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

}

