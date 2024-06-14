<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/azure_service.proto

namespace GPBMetadata\Google\Cloud\Gkemulticloud\V1;

class AzureService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AzureResources::initOnce();
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\CommonResources::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�D
1google/cloud/gkemulticloud/v1/azure_service.protogoogle.cloud.gkemulticloud.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto3google/cloud/gkemulticloud/v1/azure_resources.proto4google/cloud/gkemulticloud/v1/common_resources.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
CreateAzureClusterRequestA
parent (	B1�A�A+)gkemulticloud.googleapis.com/AzureClusterG
azure_cluster (2+.google.cloud.gkemulticloud.v1.AzureClusterB�A
azure_cluster_id (	B�A
validate_only ("�
UpdateAzureClusterRequestG
azure_cluster (2+.google.cloud.gkemulticloud.v1.AzureClusterB�A
validate_only (4
update_mask (2.google.protobuf.FieldMaskB�A"Y
GetAzureClusterRequest?
name (	B1�A�A+
)gkemulticloud.googleapis.com/AzureCluster"�
ListAzureClustersRequestA
parent (	B1�A�A+)gkemulticloud.googleapis.com/AzureCluster
	page_size (

page_token (	"y
ListAzureClustersResponseC
azure_clusters (2+.google.cloud.gkemulticloud.v1.AzureCluster
next_page_token (	"�
DeleteAzureClusterRequest?
name (	B1�A�A+
)gkemulticloud.googleapis.com/AzureCluster
allow_missing (
validate_only (
etag (	
ignore_errors (B�A"�
CreateAzureNodePoolRequestB
parent (	B2�A�A,*gkemulticloud.googleapis.com/AzureNodePoolJ
azure_node_pool (2,.google.cloud.gkemulticloud.v1.AzureNodePoolB�A
azure_node_pool_id (	B�A
validate_only ("�
UpdateAzureNodePoolRequestJ
azure_node_pool (2,.google.cloud.gkemulticloud.v1.AzureNodePoolB�A
validate_only (4
update_mask (2.google.protobuf.FieldMaskB�A"[
GetAzureNodePoolRequest@
name (	B2�A�A,
*gkemulticloud.googleapis.com/AzureNodePool"�
ListAzureNodePoolsRequestB
parent (	B2�A�A,*gkemulticloud.googleapis.com/AzureNodePool
	page_size (

page_token (	"}
ListAzureNodePoolsResponseF
azure_node_pools (2,.google.cloud.gkemulticloud.v1.AzureNodePool
next_page_token (	"�
DeleteAzureNodePoolRequest@
name (	B2�A�A,
*gkemulticloud.googleapis.com/AzureNodePool
validate_only (
allow_missing (
etag (	
ignore_errors (B�A"g
GetAzureOpenIdConfigRequestH
azure_cluster (	B1�A�A+
)gkemulticloud.googleapis.com/AzureCluster"f
GetAzureJsonWebKeysRequestH
azure_cluster (	B1�A�A+
)gkemulticloud.googleapis.com/AzureCluster"c
GetAzureServerConfigRequestD
name (	B6�A�A0
.gkemulticloud.googleapis.com/AzureServerConfig"�
CreateAzureClientRequest@
parent (	B0�A�A*(gkemulticloud.googleapis.com/AzureClientE
azure_client (2*.google.cloud.gkemulticloud.v1.AzureClientB�A
azure_client_id (	B�A
validate_only ("W
GetAzureClientRequest>
name (	B0�A�A*
(gkemulticloud.googleapis.com/AzureClient"�
ListAzureClientsRequest@
parent (	B0�A�A*(gkemulticloud.googleapis.com/AzureClient
	page_size (

page_token (	"v
ListAzureClientsResponseA
azure_clients (2*.google.cloud.gkemulticloud.v1.AzureClient
next_page_token (	"�
DeleteAzureClientRequest>
name (	B0�A�A*
(gkemulticloud.googleapis.com/AzureClient
allow_missing (
validate_only ("k
GenerateAzureAccessTokenRequestH
azure_cluster (	B1�A�A+
)gkemulticloud.googleapis.com/AzureCluster"w
 GenerateAzureAccessTokenResponse
access_token (	B�A8
expiration_time (2.google.protobuf.TimestampB�A"�
%GenerateAzureClusterAgentTokenRequestH
azure_cluster (	B1�A�A+
)gkemulticloud.googleapis.com/AzureCluster
subject_token (	B�A
subject_token_type (	B�A
version (	B�A
node_pool_id (	B�A

grant_type (	B�A
audience (	B�A
scope (	B�A!
requested_token_type	 (	B�A
options
 (	B�A"f
&GenerateAzureClusterAgentTokenResponse
access_token (	

expires_in (

token_type (	2�#
AzureClusters�
CreateAzureClient7.google.cloud.gkemulticloud.v1.CreateAzureClientRequest.google.longrunning.Operation"��A 
AzureClientOperationMetadata�A#parent,azure_client,azure_client_id���@"0/v1/{parent=projects/*/locations/*}/azureClients:azure_client�
GetAzureClient4.google.cloud.gkemulticloud.v1.GetAzureClientRequest*.google.cloud.gkemulticloud.v1.AzureClient"?�Aname���20/v1/{name=projects/*/locations/*/azureClients/*}�
ListAzureClients6.google.cloud.gkemulticloud.v1.ListAzureClientsRequest7.google.cloud.gkemulticloud.v1.ListAzureClientsResponse"A�Aparent���20/v1/{parent=projects/*/locations/*}/azureClients�
DeleteAzureClient7.google.cloud.gkemulticloud.v1.DeleteAzureClientRequest.google.longrunning.Operation"l�A*
google.protobuf.EmptyOperationMetadata�Aname���2*0/v1/{name=projects/*/locations/*/azureClients/*}�
CreateAzureCluster8.google.cloud.gkemulticloud.v1.CreateAzureClusterRequest.google.longrunning.Operation"��A!
AzureClusterOperationMetadata�A%parent,azure_cluster,azure_cluster_id���B"1/v1/{parent=projects/*/locations/*}/azureClusters:azure_cluster�
UpdateAzureCluster8.google.cloud.gkemulticloud.v1.UpdateAzureClusterRequest.google.longrunning.Operation"��A!
AzureClusterOperationMetadata�Aazure_cluster,update_mask���P2?/v1/{azure_cluster.name=projects/*/locations/*/azureClusters/*}:azure_cluster�
GetAzureCluster5.google.cloud.gkemulticloud.v1.GetAzureClusterRequest+.google.cloud.gkemulticloud.v1.AzureCluster"@�Aname���31/v1/{name=projects/*/locations/*/azureClusters/*}�
ListAzureClusters7.google.cloud.gkemulticloud.v1.ListAzureClustersRequest8.google.cloud.gkemulticloud.v1.ListAzureClustersResponse"B�Aparent���31/v1/{parent=projects/*/locations/*}/azureClusters�
DeleteAzureCluster8.google.cloud.gkemulticloud.v1.DeleteAzureClusterRequest.google.longrunning.Operation"m�A*
google.protobuf.EmptyOperationMetadata�Aname���3*1/v1/{name=projects/*/locations/*/azureClusters/*}�
GenerateAzureClusterAgentTokenD.google.cloud.gkemulticloud.v1.GenerateAzureClusterAgentTokenRequestE.google.cloud.gkemulticloud.v1.GenerateAzureClusterAgentTokenResponse"d���^"Y/v1/{azure_cluster=projects/*/locations/*/azureClusters/*}:generateAzureClusterAgentToken:*�
GenerateAzureAccessToken>.google.cloud.gkemulticloud.v1.GenerateAzureAccessTokenRequest?.google.cloud.gkemulticloud.v1.GenerateAzureAccessTokenResponse"[���US/v1/{azure_cluster=projects/*/locations/*/azureClusters/*}:generateAzureAccessToken�
CreateAzureNodePool9.google.cloud.gkemulticloud.v1.CreateAzureNodePoolRequest.google.longrunning.Operation"��A"
AzureNodePoolOperationMetadata�A)parent,azure_node_pool,azure_node_pool_id���U"B/v1/{parent=projects/*/locations/*/azureClusters/*}/azureNodePools:azure_node_pool�
UpdateAzureNodePool9.google.cloud.gkemulticloud.v1.UpdateAzureNodePoolRequest.google.longrunning.Operation"��A"
AzureNodePoolOperationMetadata�Aazure_node_pool,update_mask���e2R/v1/{azure_node_pool.name=projects/*/locations/*/azureClusters/*/azureNodePools/*}:azure_node_pool�
GetAzureNodePool6.google.cloud.gkemulticloud.v1.GetAzureNodePoolRequest,.google.cloud.gkemulticloud.v1.AzureNodePool"Q�Aname���DB/v1/{name=projects/*/locations/*/azureClusters/*/azureNodePools/*}�
ListAzureNodePools8.google.cloud.gkemulticloud.v1.ListAzureNodePoolsRequest9.google.cloud.gkemulticloud.v1.ListAzureNodePoolsResponse"S�Aparent���DB/v1/{parent=projects/*/locations/*/azureClusters/*}/azureNodePools�
DeleteAzureNodePool9.google.cloud.gkemulticloud.v1.DeleteAzureNodePoolRequest.google.longrunning.Operation"~�A*
google.protobuf.EmptyOperationMetadata�Aname���D*B/v1/{name=projects/*/locations/*/azureClusters/*/azureNodePools/*}�
GetAzureOpenIdConfig:.google.cloud.gkemulticloud.v1.GetAzureOpenIdConfigRequest0.google.cloud.gkemulticloud.v1.AzureOpenIdConfig"s�Aazure_cluster���][/v1/{azure_cluster=projects/*/locations/*/azureClusters/*}/.well-known/openid-configuration�
GetAzureJsonWebKeys9.google.cloud.gkemulticloud.v1.GetAzureJsonWebKeysRequest/.google.cloud.gkemulticloud.v1.AzureJsonWebKeys"W�Aazure_cluster���A?/v1/{azure_cluster=projects/*/locations/*/azureClusters/*}/jwks�
GetAzureServerConfig:.google.cloud.gkemulticloud.v1.GetAzureServerConfigRequest0.google.cloud.gkemulticloud.v1.AzureServerConfig"B�Aname���53/v1/{name=projects/*/locations/*/azureServerConfig}P�Agkemulticloud.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
!com.google.cloud.gkemulticloud.v1BAzureServiceProtoPZGcloud.google.com/go/gkemulticloud/apiv1/gkemulticloudpb;gkemulticloudpb�Google.Cloud.GkeMultiCloud.V1�Google\\Cloud\\GkeMultiCloud\\V1� Google::Cloud::GkeMultiCloud::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

