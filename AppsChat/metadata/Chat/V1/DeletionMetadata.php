<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/deletion_metadata.proto

namespace GPBMetadata\Google\Chat\V1;

class DeletionMetadata
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
&google/chat/v1/deletion_metadata.protogoogle.chat.v1"�
DeletionMetadataD
deletion_type (2-.google.chat.v1.DeletionMetadata.DeletionType"�
DeletionType
DELETION_TYPE_UNSPECIFIED 
CREATOR
SPACE_OWNER	
ADMIN
APP_MESSAGE_EXPIRY
CREATOR_VIA_APP
SPACE_OWNER_VIA_APPB�
com.google.chat.v1BDeletionMetadataProtoPZ,cloud.google.com/go/chat/apiv1/chatpb;chatpb�DYNAPIProto�Google.Apps.Chat.V1�Google\\Apps\\Chat\\V1�Google::Apps::Chat::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

