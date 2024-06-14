<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_taxonomy.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Delete DataAttributeBinding request.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DeleteDataAttributeBindingRequest</code>
 */
class DeleteDataAttributeBindingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the DataAttributeBinding:
     * projects/{project_number}/locations/{location_id}/dataAttributeBindings/{data_attribute_binding_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. If the client provided etag value does not match the current etag
     * value, the DeleteDataAttributeBindingRequest method returns an ABORTED
     * error response. Etags must be used when calling the
     * DeleteDataAttributeBinding.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $etag = '';

    /**
     * @param string $name Required. The resource name of the DataAttributeBinding:
     *                     projects/{project_number}/locations/{location_id}/dataAttributeBindings/{data_attribute_binding_id}
     *                     Please see {@see DataTaxonomyServiceClient::dataAttributeBindingName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dataplex\V1\DeleteDataAttributeBindingRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the DataAttributeBinding:
     *           projects/{project_number}/locations/{location_id}/dataAttributeBindings/{data_attribute_binding_id}
     *     @type string $etag
     *           Required. If the client provided etag value does not match the current etag
     *           value, the DeleteDataAttributeBindingRequest method returns an ABORTED
     *           error response. Etags must be used when calling the
     *           DeleteDataAttributeBinding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataTaxonomy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the DataAttributeBinding:
     * projects/{project_number}/locations/{location_id}/dataAttributeBindings/{data_attribute_binding_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the DataAttributeBinding:
     * projects/{project_number}/locations/{location_id}/dataAttributeBindings/{data_attribute_binding_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. If the client provided etag value does not match the current etag
     * value, the DeleteDataAttributeBindingRequest method returns an ABORTED
     * error response. Etags must be used when calling the
     * DeleteDataAttributeBinding.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Required. If the client provided etag value does not match the current etag
     * value, the DeleteDataAttributeBindingRequest method returns an ABORTED
     * error response. Etags must be used when calling the
     * DeleteDataAttributeBinding.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

