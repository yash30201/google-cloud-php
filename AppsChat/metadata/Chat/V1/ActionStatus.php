<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/action_status.proto

namespace GPBMetadata\Google\Chat\V1;

class ActionStatus
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Rpc\Code::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
"google/chat/v1/action_status.protogoogle.chat.v1"R
ActionStatus%
status_code (2.google.rpc.Code
user_facing_message (	B�
com.google.chat.v1BActionStatusProtoPZ,cloud.google.com/go/chat/apiv1/chatpb;chatpb�DYNAPIProto�Google.Apps.Chat.V1�Google\\Apps\\Chat\\V1�Google::Apps::Chat::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

