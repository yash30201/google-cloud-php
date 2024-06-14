<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1\Overlay;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Display overlay object with fade animation.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1.Overlay.AnimationFade</code>
 */
class AnimationFade extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Type of fade animation: `FADE_IN` or `FADE_OUT`.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.Overlay.FadeType fade_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $fade_type = 0;
    /**
     * Normalized coordinates based on output video resolution. Valid
     * values: `0.0`–`1.0`. `xy` is the upper-left coordinate of the overlay
     * object. For example, use the x and y coordinates {0,0} to position the
     * top-left corner of the overlay animation in the top-left corner of the
     * output video.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.Overlay.NormalizedCoordinate xy = 2;</code>
     */
    protected $xy = null;
    /**
     * The time to start the fade animation, in seconds. Default: 0
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time_offset = 3;</code>
     */
    protected $start_time_offset = null;
    /**
     * The time to end the fade animation, in seconds. Default:
     * `start_time_offset` + 1s
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_time_offset = 4;</code>
     */
    protected $end_time_offset = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $fade_type
     *           Required. Type of fade animation: `FADE_IN` or `FADE_OUT`.
     *     @type \Google\Cloud\Video\Transcoder\V1\Overlay\NormalizedCoordinate $xy
     *           Normalized coordinates based on output video resolution. Valid
     *           values: `0.0`–`1.0`. `xy` is the upper-left coordinate of the overlay
     *           object. For example, use the x and y coordinates {0,0} to position the
     *           top-left corner of the overlay animation in the top-left corner of the
     *           output video.
     *     @type \Google\Protobuf\Duration $start_time_offset
     *           The time to start the fade animation, in seconds. Default: 0
     *     @type \Google\Protobuf\Duration $end_time_offset
     *           The time to end the fade animation, in seconds. Default:
     *           `start_time_offset` + 1s
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Type of fade animation: `FADE_IN` or `FADE_OUT`.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.Overlay.FadeType fade_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getFadeType()
    {
        return $this->fade_type;
    }

    /**
     * Required. Type of fade animation: `FADE_IN` or `FADE_OUT`.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.Overlay.FadeType fade_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setFadeType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Video\Transcoder\V1\Overlay\FadeType::class);
        $this->fade_type = $var;

        return $this;
    }

    /**
     * Normalized coordinates based on output video resolution. Valid
     * values: `0.0`–`1.0`. `xy` is the upper-left coordinate of the overlay
     * object. For example, use the x and y coordinates {0,0} to position the
     * top-left corner of the overlay animation in the top-left corner of the
     * output video.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.Overlay.NormalizedCoordinate xy = 2;</code>
     * @return \Google\Cloud\Video\Transcoder\V1\Overlay\NormalizedCoordinate|null
     */
    public function getXy()
    {
        return $this->xy;
    }

    public function hasXy()
    {
        return isset($this->xy);
    }

    public function clearXy()
    {
        unset($this->xy);
    }

    /**
     * Normalized coordinates based on output video resolution. Valid
     * values: `0.0`–`1.0`. `xy` is the upper-left coordinate of the overlay
     * object. For example, use the x and y coordinates {0,0} to position the
     * top-left corner of the overlay animation in the top-left corner of the
     * output video.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.Overlay.NormalizedCoordinate xy = 2;</code>
     * @param \Google\Cloud\Video\Transcoder\V1\Overlay\NormalizedCoordinate $var
     * @return $this
     */
    public function setXy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1\Overlay\NormalizedCoordinate::class);
        $this->xy = $var;

        return $this;
    }

    /**
     * The time to start the fade animation, in seconds. Default: 0
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time_offset = 3;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getStartTimeOffset()
    {
        return $this->start_time_offset;
    }

    public function hasStartTimeOffset()
    {
        return isset($this->start_time_offset);
    }

    public function clearStartTimeOffset()
    {
        unset($this->start_time_offset);
    }

    /**
     * The time to start the fade animation, in seconds. Default: 0
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time_offset = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setStartTimeOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->start_time_offset = $var;

        return $this;
    }

    /**
     * The time to end the fade animation, in seconds. Default:
     * `start_time_offset` + 1s
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_time_offset = 4;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getEndTimeOffset()
    {
        return $this->end_time_offset;
    }

    public function hasEndTimeOffset()
    {
        return isset($this->end_time_offset);
    }

    public function clearEndTimeOffset()
    {
        unset($this->end_time_offset);
    }

    /**
     * The time to end the fade animation, in seconds. Default:
     * `start_time_offset` + 1s
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_time_offset = 4;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setEndTimeOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->end_time_offset = $var;

        return $this;
    }

}


