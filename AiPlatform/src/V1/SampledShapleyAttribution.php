<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/explanation.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An attribution method that approximates Shapley values for features that
 * contribute to the label being predicted. A sampling strategy is used to
 * approximate the value rather than considering all subsets of features.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.SampledShapleyAttribution</code>
 */
class SampledShapleyAttribution extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The number of feature permutations to consider when approximating
     * the Shapley values.
     * Valid range of its value is [1, 50], inclusively.
     *
     * Generated from protobuf field <code>int32 path_count = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $path_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $path_count
     *           Required. The number of feature permutations to consider when approximating
     *           the Shapley values.
     *           Valid range of its value is [1, 50], inclusively.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Explanation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The number of feature permutations to consider when approximating
     * the Shapley values.
     * Valid range of its value is [1, 50], inclusively.
     *
     * Generated from protobuf field <code>int32 path_count = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getPathCount()
    {
        return $this->path_count;
    }

    /**
     * Required. The number of feature permutations to consider when approximating
     * the Shapley values.
     * Valid range of its value is [1, 50], inclusively.
     *
     * Generated from protobuf field <code>int32 path_count = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setPathCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->path_count = $var;

        return $this;
    }

}

