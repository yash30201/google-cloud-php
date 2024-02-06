<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/servicehealth/v1/event_service.proto

namespace GPBMetadata\Google\Cloud\Servicehealth\V1;

class EventService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Cloud\Servicehealth\V1\EventResources::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
1google/cloud/servicehealth/v1/event_service.protogoogle.cloud.servicehealth.v1google/api/client.proto3google/cloud/servicehealth/v1/event_resources.proto2�

ServiceHealth�

ListEvents0.google.cloud.servicehealth.v1.ListEventsRequest1.google.cloud.servicehealth.v1.ListEventsResponse";�Aparent���,*/v1/{parent=projects/*/locations/*}/events�
GetEvent..google.cloud.servicehealth.v1.GetEventRequest$.google.cloud.servicehealth.v1.Event"9�Aname���,*/v1/{name=projects/*/locations/*/events/*}�
ListOrganizationEvents<.google.cloud.servicehealth.v1.ListOrganizationEventsRequest=.google.cloud.servicehealth.v1.ListOrganizationEventsResponse"L�Aparent���=;/v1/{parent=organizations/*/locations/*}/organizationEvents�
GetOrganizationEvent:.google.cloud.servicehealth.v1.GetOrganizationEventRequest0.google.cloud.servicehealth.v1.OrganizationEvent"J�Aname���=;/v1/{name=organizations/*/locations/*/organizationEvents/*}�
ListOrganizationImpacts=.google.cloud.servicehealth.v1.ListOrganizationImpactsRequest>.google.cloud.servicehealth.v1.ListOrganizationImpactsResponse"M�Aparent���></v1/{parent=organizations/*/locations/*}/organizationImpacts�
GetOrganizationImpact;.google.cloud.servicehealth.v1.GetOrganizationImpactRequest1.google.cloud.servicehealth.v1.OrganizationImpact"K�Aname���></v1/{name=organizations/*/locations/*/organizationImpacts/*}P�Aservicehealth.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
!com.google.cloud.servicehealth.v1BEventServiceProtoPZGcloud.google.com/go/servicehealth/apiv1/servicehealthpb;servicehealthpb�Google.Cloud.ServiceHealth.V1�Google\\Cloud\\ServiceHealth\\V1� Google::Cloud::ServiceHealth::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

