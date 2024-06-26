<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [FeaturestoreService.DeleteFeatureValues][google.cloud.aiplatform.v1.FeaturestoreService.DeleteFeatureValues].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.DeleteFeatureValuesRequest</code>
 */
class DeleteFeatureValuesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the EntityType grouping the Features for
     * which values are being deleted from. Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entityType}`
     *
     * Generated from protobuf field <code>string entity_type = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $entity_type = '';
    protected $DeleteOption;

    /**
     * @param string $entityType Required. The resource name of the EntityType grouping the Features for
     *                           which values are being deleted from. Format:
     *                           `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entityType}`
     *                           Please see {@see FeaturestoreServiceClient::entityTypeName()} for help formatting this field.
     *
     * @return \Google\Cloud\AIPlatform\V1\DeleteFeatureValuesRequest
     *
     * @experimental
     */
    public static function build(string $entityType): self
    {
        return (new self())
            ->setEntityType($entityType);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\DeleteFeatureValuesRequest\SelectEntity $select_entity
     *           Select feature values to be deleted by specifying entities.
     *     @type \Google\Cloud\AIPlatform\V1\DeleteFeatureValuesRequest\SelectTimeRangeAndFeature $select_time_range_and_feature
     *           Select feature values to be deleted by specifying time range and
     *           features.
     *     @type string $entity_type
     *           Required. The resource name of the EntityType grouping the Features for
     *           which values are being deleted from. Format:
     *           `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entityType}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Select feature values to be deleted by specifying entities.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DeleteFeatureValuesRequest.SelectEntity select_entity = 2;</code>
     * @return \Google\Cloud\AIPlatform\V1\DeleteFeatureValuesRequest\SelectEntity|null
     */
    public function getSelectEntity()
    {
        return $this->readOneof(2);
    }

    public function hasSelectEntity()
    {
        return $this->hasOneof(2);
    }

    /**
     * Select feature values to be deleted by specifying entities.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DeleteFeatureValuesRequest.SelectEntity select_entity = 2;</code>
     * @param \Google\Cloud\AIPlatform\V1\DeleteFeatureValuesRequest\SelectEntity $var
     * @return $this
     */
    public function setSelectEntity($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\DeleteFeatureValuesRequest\SelectEntity::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Select feature values to be deleted by specifying time range and
     * features.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DeleteFeatureValuesRequest.SelectTimeRangeAndFeature select_time_range_and_feature = 3;</code>
     * @return \Google\Cloud\AIPlatform\V1\DeleteFeatureValuesRequest\SelectTimeRangeAndFeature|null
     */
    public function getSelectTimeRangeAndFeature()
    {
        return $this->readOneof(3);
    }

    public function hasSelectTimeRangeAndFeature()
    {
        return $this->hasOneof(3);
    }

    /**
     * Select feature values to be deleted by specifying time range and
     * features.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DeleteFeatureValuesRequest.SelectTimeRangeAndFeature select_time_range_and_feature = 3;</code>
     * @param \Google\Cloud\AIPlatform\V1\DeleteFeatureValuesRequest\SelectTimeRangeAndFeature $var
     * @return $this
     */
    public function setSelectTimeRangeAndFeature($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\DeleteFeatureValuesRequest\SelectTimeRangeAndFeature::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Required. The resource name of the EntityType grouping the Features for
     * which values are being deleted from. Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entityType}`
     *
     * Generated from protobuf field <code>string entity_type = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getEntityType()
    {
        return $this->entity_type;
    }

    /**
     * Required. The resource name of the EntityType grouping the Features for
     * which values are being deleted from. Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entityType}`
     *
     * Generated from protobuf field <code>string entity_type = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEntityType($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity_type = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeleteOption()
    {
        return $this->whichOneof("DeleteOption");
    }

}

