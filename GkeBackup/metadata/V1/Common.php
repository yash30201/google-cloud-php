<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/common.proto

namespace GPBMetadata\Google\Cloud\Gkebackup\V1;

class Common
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&google/cloud/gkebackup/v1/common.protogoogle.cloud.gkebackup.v1google/api/resource.proto"%

Namespaces

namespaces (	B�A";
NamespacedName
	namespace (	B�A
name (	B�A"[
NamespacedNamesH
namespaced_names (2).google.cloud.gkebackup.v1.NamespacedNameB�A"Z
EncryptionKeyI
gcp_kms_encryption_key (	B)�A�A#
!cloudkms.googleapis.com/CryptoKeyB�
com.google.cloud.gkebackup.v1BCommonProtoPZ;cloud.google.com/go/gkebackup/apiv1/gkebackuppb;gkebackuppb�Google.Cloud.GkeBackup.V1�Google\\Cloud\\GkeBackup\\V1�Google::Cloud::GkeBackup::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

