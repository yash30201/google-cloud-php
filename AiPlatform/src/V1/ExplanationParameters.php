<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/explanation.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters to configure explaining for Model's predictions.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ExplanationParameters</code>
 */
class ExplanationParameters extends \Google\Protobuf\Internal\Message
{
    /**
     * If populated, returns attributions for top K indices of outputs
     * (defaults to 1). Only applies to Models that predicts more than one outputs
     * (e,g, multi-class Models). When set to -1, returns explanations for all
     * outputs.
     *
     * Generated from protobuf field <code>int32 top_k = 4;</code>
     */
    protected $top_k = 0;
    /**
     * If populated, only returns attributions that have
     * [output_index][google.cloud.aiplatform.v1.Attribution.output_index]
     * contained in output_indices. It must be an ndarray of integers, with the
     * same shape of the output it's explaining.
     * If not populated, returns attributions for
     * [top_k][google.cloud.aiplatform.v1.ExplanationParameters.top_k] indices of
     * outputs. If neither top_k nor output_indices is populated, returns the
     * argmax index of the outputs.
     * Only applicable to Models that predict multiple outputs (e,g, multi-class
     * Models that predict multiple classes).
     *
     * Generated from protobuf field <code>.google.protobuf.ListValue output_indices = 5;</code>
     */
    protected $output_indices = null;
    protected $method;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\SampledShapleyAttribution $sampled_shapley_attribution
     *           An attribution method that approximates Shapley values for features that
     *           contribute to the label being predicted. A sampling strategy is used to
     *           approximate the value rather than considering all subsets of features.
     *           Refer to this paper for model details: https://arxiv.org/abs/1306.4265.
     *     @type \Google\Cloud\AIPlatform\V1\IntegratedGradientsAttribution $integrated_gradients_attribution
     *           An attribution method that computes Aumann-Shapley values taking
     *           advantage of the model's fully differentiable structure. Refer to this
     *           paper for more details: https://arxiv.org/abs/1703.01365
     *     @type \Google\Cloud\AIPlatform\V1\XraiAttribution $xrai_attribution
     *           An attribution method that redistributes Integrated Gradients
     *           attribution to segmented regions, taking advantage of the model's fully
     *           differentiable structure. Refer to this paper for
     *           more details: https://arxiv.org/abs/1906.02825
     *           XRAI currently performs better on natural images, like a picture of a
     *           house or an animal. If the images are taken in artificial environments,
     *           like a lab or manufacturing line, or from diagnostic equipment, like
     *           x-rays or quality-control cameras, use Integrated Gradients instead.
     *     @type \Google\Cloud\AIPlatform\V1\Examples $examples
     *           Example-based explanations that returns the nearest neighbors from the
     *           provided dataset.
     *     @type int $top_k
     *           If populated, returns attributions for top K indices of outputs
     *           (defaults to 1). Only applies to Models that predicts more than one outputs
     *           (e,g, multi-class Models). When set to -1, returns explanations for all
     *           outputs.
     *     @type \Google\Protobuf\ListValue $output_indices
     *           If populated, only returns attributions that have
     *           [output_index][google.cloud.aiplatform.v1.Attribution.output_index]
     *           contained in output_indices. It must be an ndarray of integers, with the
     *           same shape of the output it's explaining.
     *           If not populated, returns attributions for
     *           [top_k][google.cloud.aiplatform.v1.ExplanationParameters.top_k] indices of
     *           outputs. If neither top_k nor output_indices is populated, returns the
     *           argmax index of the outputs.
     *           Only applicable to Models that predict multiple outputs (e,g, multi-class
     *           Models that predict multiple classes).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Explanation::initOnce();
        parent::__construct($data);
    }

    /**
     * An attribution method that approximates Shapley values for features that
     * contribute to the label being predicted. A sampling strategy is used to
     * approximate the value rather than considering all subsets of features.
     * Refer to this paper for model details: https://arxiv.org/abs/1306.4265.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SampledShapleyAttribution sampled_shapley_attribution = 1;</code>
     * @return \Google\Cloud\AIPlatform\V1\SampledShapleyAttribution|null
     */
    public function getSampledShapleyAttribution()
    {
        return $this->readOneof(1);
    }

    public function hasSampledShapleyAttribution()
    {
        return $this->hasOneof(1);
    }

    /**
     * An attribution method that approximates Shapley values for features that
     * contribute to the label being predicted. A sampling strategy is used to
     * approximate the value rather than considering all subsets of features.
     * Refer to this paper for model details: https://arxiv.org/abs/1306.4265.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SampledShapleyAttribution sampled_shapley_attribution = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\SampledShapleyAttribution $var
     * @return $this
     */
    public function setSampledShapleyAttribution($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\SampledShapleyAttribution::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * An attribution method that computes Aumann-Shapley values taking
     * advantage of the model's fully differentiable structure. Refer to this
     * paper for more details: https://arxiv.org/abs/1703.01365
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.IntegratedGradientsAttribution integrated_gradients_attribution = 2;</code>
     * @return \Google\Cloud\AIPlatform\V1\IntegratedGradientsAttribution|null
     */
    public function getIntegratedGradientsAttribution()
    {
        return $this->readOneof(2);
    }

    public function hasIntegratedGradientsAttribution()
    {
        return $this->hasOneof(2);
    }

    /**
     * An attribution method that computes Aumann-Shapley values taking
     * advantage of the model's fully differentiable structure. Refer to this
     * paper for more details: https://arxiv.org/abs/1703.01365
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.IntegratedGradientsAttribution integrated_gradients_attribution = 2;</code>
     * @param \Google\Cloud\AIPlatform\V1\IntegratedGradientsAttribution $var
     * @return $this
     */
    public function setIntegratedGradientsAttribution($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\IntegratedGradientsAttribution::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * An attribution method that redistributes Integrated Gradients
     * attribution to segmented regions, taking advantage of the model's fully
     * differentiable structure. Refer to this paper for
     * more details: https://arxiv.org/abs/1906.02825
     * XRAI currently performs better on natural images, like a picture of a
     * house or an animal. If the images are taken in artificial environments,
     * like a lab or manufacturing line, or from diagnostic equipment, like
     * x-rays or quality-control cameras, use Integrated Gradients instead.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.XraiAttribution xrai_attribution = 3;</code>
     * @return \Google\Cloud\AIPlatform\V1\XraiAttribution|null
     */
    public function getXraiAttribution()
    {
        return $this->readOneof(3);
    }

    public function hasXraiAttribution()
    {
        return $this->hasOneof(3);
    }

    /**
     * An attribution method that redistributes Integrated Gradients
     * attribution to segmented regions, taking advantage of the model's fully
     * differentiable structure. Refer to this paper for
     * more details: https://arxiv.org/abs/1906.02825
     * XRAI currently performs better on natural images, like a picture of a
     * house or an animal. If the images are taken in artificial environments,
     * like a lab or manufacturing line, or from diagnostic equipment, like
     * x-rays or quality-control cameras, use Integrated Gradients instead.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.XraiAttribution xrai_attribution = 3;</code>
     * @param \Google\Cloud\AIPlatform\V1\XraiAttribution $var
     * @return $this
     */
    public function setXraiAttribution($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\XraiAttribution::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Example-based explanations that returns the nearest neighbors from the
     * provided dataset.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Examples examples = 7;</code>
     * @return \Google\Cloud\AIPlatform\V1\Examples|null
     */
    public function getExamples()
    {
        return $this->readOneof(7);
    }

    public function hasExamples()
    {
        return $this->hasOneof(7);
    }

    /**
     * Example-based explanations that returns the nearest neighbors from the
     * provided dataset.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Examples examples = 7;</code>
     * @param \Google\Cloud\AIPlatform\V1\Examples $var
     * @return $this
     */
    public function setExamples($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Examples::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * If populated, returns attributions for top K indices of outputs
     * (defaults to 1). Only applies to Models that predicts more than one outputs
     * (e,g, multi-class Models). When set to -1, returns explanations for all
     * outputs.
     *
     * Generated from protobuf field <code>int32 top_k = 4;</code>
     * @return int
     */
    public function getTopK()
    {
        return $this->top_k;
    }

    /**
     * If populated, returns attributions for top K indices of outputs
     * (defaults to 1). Only applies to Models that predicts more than one outputs
     * (e,g, multi-class Models). When set to -1, returns explanations for all
     * outputs.
     *
     * Generated from protobuf field <code>int32 top_k = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setTopK($var)
    {
        GPBUtil::checkInt32($var);
        $this->top_k = $var;

        return $this;
    }

    /**
     * If populated, only returns attributions that have
     * [output_index][google.cloud.aiplatform.v1.Attribution.output_index]
     * contained in output_indices. It must be an ndarray of integers, with the
     * same shape of the output it's explaining.
     * If not populated, returns attributions for
     * [top_k][google.cloud.aiplatform.v1.ExplanationParameters.top_k] indices of
     * outputs. If neither top_k nor output_indices is populated, returns the
     * argmax index of the outputs.
     * Only applicable to Models that predict multiple outputs (e,g, multi-class
     * Models that predict multiple classes).
     *
     * Generated from protobuf field <code>.google.protobuf.ListValue output_indices = 5;</code>
     * @return \Google\Protobuf\ListValue|null
     */
    public function getOutputIndices()
    {
        return $this->output_indices;
    }

    public function hasOutputIndices()
    {
        return isset($this->output_indices);
    }

    public function clearOutputIndices()
    {
        unset($this->output_indices);
    }

    /**
     * If populated, only returns attributions that have
     * [output_index][google.cloud.aiplatform.v1.Attribution.output_index]
     * contained in output_indices. It must be an ndarray of integers, with the
     * same shape of the output it's explaining.
     * If not populated, returns attributions for
     * [top_k][google.cloud.aiplatform.v1.ExplanationParameters.top_k] indices of
     * outputs. If neither top_k nor output_indices is populated, returns the
     * argmax index of the outputs.
     * Only applicable to Models that predict multiple outputs (e,g, multi-class
     * Models that predict multiple classes).
     *
     * Generated from protobuf field <code>.google.protobuf.ListValue output_indices = 5;</code>
     * @param \Google\Protobuf\ListValue $var
     * @return $this
     */
    public function setOutputIndices($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\ListValue::class);
        $this->output_indices = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->whichOneof("method");
    }

}

