<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/custom_tuning_model.proto

namespace GPBMetadata\Google\Cloud\Discoveryengine\V1Beta;

class CustomTuningModel
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
=google/cloud/discoveryengine/v1beta/custom_tuning_model.proto#google.cloud.discoveryengine.v1betagoogle/api/resource.protogoogle/protobuf/timestamp.proto"�
CustomTuningModelF
name (	B8�A�A2
0discoveryengine.googleapis.com/CustomTuningModel
display_name (	
model_version (V
model_state (2A.google.cloud.discoveryengine.v1beta.CustomTuningModel.ModelState/
create_time (2.google.protobuf.Timestamp7
training_start_time (2.google.protobuf.Timestamp"�

ModelState
MODEL_STATE_UNSPECIFIED 
TRAINING_PAUSED
TRAINING
TRAINING_COMPLETE
READY_FOR_SERVING
TRAINING_FAILED:��A�
0discoveryengine.googleapis.com/CustomTuningModelhprojects/{project}/locations/{location}/dataStores/{data_store}/customTuningModels/{custom_tuning_model}�projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/customTuningModels/{custom_tuning_model}B�
\'com.google.cloud.discoveryengine.v1betaBCustomTuningModelProtoPZQcloud.google.com/go/discoveryengine/apiv1beta/discoveryenginepb;discoveryenginepb�DISCOVERYENGINE�#Google.Cloud.DiscoveryEngine.V1Beta�#Google\\Cloud\\DiscoveryEngine\\V1beta�&Google::Cloud::DiscoveryEngine::V1betabproto3'
        , true);

        static::$is_initialized = true;
    }
}

