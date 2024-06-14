<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace GPBMetadata\Google\Cloud\Dataplex\V1;

class Catalog
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
        \GPBMetadata\Google\Cloud\Dataplex\V1\Service::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�n
&google/cloud/dataplex/v1/catalog.protogoogle.cloud.dataplex.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto&google/cloud/dataplex/v1/service.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.proto"�

AspectType8
name (	B*�A�A$
"dataplex.googleapis.com/AspectType
uid (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
description (	B�A
display_name (	B�AE
labels (20.google.cloud.dataplex.v1.AspectType.LabelsEntryB�A
etag (	N
authorization4 (22.google.cloud.dataplex.v1.AspectType.AuthorizationB�AU
metadata_template5 (25.google.cloud.dataplex.v1.AspectType.MetadataTemplateB�AG
transfer_status� (2(.google.cloud.dataplex.v1.TransferStatusB�A6
Authorization%
alternate_use_permission (	B�A�
MetadataTemplate
index (B�A
name (	B�A
type (	B�AQ
record_fields (25.google.cloud.dataplex.v1.AspectType.MetadataTemplateB�AY
enum_values (2?.google.cloud.dataplex.v1.AspectType.MetadataTemplate.EnumValueB�AM
	map_items
 (25.google.cloud.dataplex.v1.AspectType.MetadataTemplateB�AO
array_items (25.google.cloud.dataplex.v1.AspectType.MetadataTemplateB�A
type_id (	B�A
type_ref (	B�A[
constraints2 (2A.google.cloud.dataplex.v1.AspectType.MetadataTemplate.ConstraintsB�A[
annotations3 (2A.google.cloud.dataplex.v1.AspectType.MetadataTemplate.AnnotationsB�AK
	EnumValue
index (B�A
name (	B�A

deprecated (	B�A$
Constraints
required (B�A�
Annotations

deprecated (	B�A
display_name (	B�A
description (	B�A
display_order (B�A
string_type (	B�A
string_values (	B�A-
LabelsEntry
key (	
value (	:8:��A�
"dataplex.googleapis.com/AspectTypeAprojects/{project}/locations/{location}/aspectTypes/{aspect_type}*aspectTypes2
aspectType"�

EntryGroup8
name (	B*�A�A$
"dataplex.googleapis.com/EntryGroup
uid (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
description (	B�A
display_name (	B�AE
labels (20.google.cloud.dataplex.v1.EntryGroup.LabelsEntryB�A
etag (	G
transfer_status� (2(.google.cloud.dataplex.v1.TransferStatusB�A-
LabelsEntry
key (	
value (	:8:��A�
"dataplex.googleapis.com/EntryGroupAprojects/{project}/locations/{location}/entryGroups/{entry_group}*entryGroups2
entryGroup"�
	EntryType7
name (	B)�A�A#
!dataplex.googleapis.com/EntryType
uid (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
description (	B�A
display_name (	B�AD
labels (2/.google.cloud.dataplex.v1.EntryType.LabelsEntryB�A
etag (	B�A
type_aliases	 (	B�A
platform
 (	B�A
system (	B�AH
required_aspects2 (2..google.cloud.dataplex.v1.EntryType.AspectInfoM
authorization3 (21.google.cloud.dataplex.v1.EntryType.AuthorizationB�AC

AspectInfo5
type (	B\'�A$
"dataplex.googleapis.com/AspectType6
Authorization%
alternate_use_permission (	B�A-
LabelsEntry
key (	
value (	:8:~�A{
!dataplex.googleapis.com/EntryType?projects/{project}/locations/{location}/entryTypes/{entry_type}*
entryTypes2	entryType"�
Aspect
aspect_type (	B�A
path (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A*
data (2.google.protobuf.StructB�AB
aspect_source	 (2&.google.cloud.dataplex.v1.AspectSourceB�A"p
AspectSource/
create_time
 (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.Timestamp"�
Entry
name (	B�A

entry_type (	B�A�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AB
aspects	 (2,.google.cloud.dataplex.v1.Entry.AspectsEntryB�A
parent_entry
 (	B�A�A!
fully_qualified_name (	B�A@
entry_source (2%.google.cloud.dataplex.v1.EntrySourceB�AP
AspectsEntry
key (	/
value (2 .google.cloud.dataplex.v1.Aspect:8:��A�
dataplex.googleapis.com/EntryQprojects/{project}/locations/{location}/entryGroups/{entry_group}/entries/{entry}*entries2entry"�
EntrySource
resource (	
system (	
platform (	
display_name (	
description (	A
labels (21.google.cloud.dataplex.v1.EntrySource.LabelsEntryF
	ancestors	 (2..google.cloud.dataplex.v1.EntrySource.AncestorB�A/
create_time
 (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.Timestamp0
Ancestor
name (	B�A
type (	B�A-
LabelsEntry
key (	
value (	:8"�
CreateEntryGroupRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
entry_group_id (	B�A>
entry_group (2$.google.cloud.dataplex.v1.EntryGroupB�A
validate_only (B�A"�
UpdateEntryGroupRequest>
entry_group (2$.google.cloud.dataplex.v1.EntryGroupB�A4
update_mask (2.google.protobuf.FieldMaskB�A
validate_only (B�A"f
DeleteEntryGroupRequest8
name (	B*�A�A$
"dataplex.googleapis.com/EntryGroup
etag (	B�A"�
ListEntryGroupsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListEntryGroupsResponse:
entry_groups (2$.google.cloud.dataplex.v1.EntryGroup
next_page_token (	
unreachable_locations (	"P
GetEntryGroupRequest8
name (	B*�A�A$
"dataplex.googleapis.com/EntryGroup"�
CreateEntryTypeRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
entry_type_id (	B�A<

entry_type (2#.google.cloud.dataplex.v1.EntryTypeB�A
validate_only (B�A"�
UpdateEntryTypeRequest<

entry_type (2#.google.cloud.dataplex.v1.EntryTypeB�A4
update_mask (2.google.protobuf.FieldMaskB�A
validate_only (B�A"d
DeleteEntryTypeRequest7
name (	B)�A�A#
!dataplex.googleapis.com/EntryType
etag (	B�A"�
ListEntryTypesRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListEntryTypesResponse8
entry_types (2#.google.cloud.dataplex.v1.EntryType
next_page_token (	
unreachable_locations (	"N
GetEntryTypeRequest7
name (	B)�A�A#
!dataplex.googleapis.com/EntryType"�
CreateAspectTypeRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
aspect_type_id (	B�A>
aspect_type (2$.google.cloud.dataplex.v1.AspectTypeB�A
validate_only (B�A"�
UpdateAspectTypeRequest>
aspect_type (2$.google.cloud.dataplex.v1.AspectTypeB�A4
update_mask (2.google.protobuf.FieldMaskB�A
validate_only (B�A"f
DeleteAspectTypeRequest8
name (	B*�A�A$
"dataplex.googleapis.com/AspectType
etag (	B�A"�
ListAspectTypesRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListAspectTypesResponse:
aspect_types (2$.google.cloud.dataplex.v1.AspectType
next_page_token (	
unreachable_locations (	"P
GetAspectTypeRequest8
name (	B*�A�A$
"dataplex.googleapis.com/AspectType"�
CreateEntryRequest:
parent (	B*�A�A$
"dataplex.googleapis.com/EntryGroup
entry_id (	B�A3
entry (2.google.cloud.dataplex.v1.EntryB�A"�
UpdateEntryRequest3
entry (2.google.cloud.dataplex.v1.EntryB�A4
update_mask (2.google.protobuf.FieldMaskB�A
allow_missing (B�A#
delete_missing_aspects (B�A
aspect_keys (	B�A"I
DeleteEntryRequest3
name (	B%�A�A
dataplex.googleapis.com/Entry"�
ListEntriesRequest:
parent (	B*�A�A$
"dataplex.googleapis.com/EntryGroup
	page_size (B�A

page_token (	B�A
filter (	B�A"`
ListEntriesResponse0
entries (2.google.cloud.dataplex.v1.Entry
next_page_token (	"�
GetEntryRequest3
name (	B%�A�A
dataplex.googleapis.com/Entry6
view (2#.google.cloud.dataplex.v1.EntryViewB�A
aspect_types (	B�A
paths (	B�A"�
LookupEntryRequest
name (	B�A6
view (2#.google.cloud.dataplex.v1.EntryViewB�A
aspect_types (	B�A
paths (	B�A4
entry (	B%�A�A
dataplex.googleapis.com/Entry"�
SearchEntriesRequest
name (	B�A
query (	B�A
	page_size (B�A

page_token (	B�A
order_by (	B�A
scope (	B�A"�
SearchEntriesResult
linked_resource (	7
dataplex_entry	 (2.google.cloud.dataplex.v1.EntryH
snippets (26.google.cloud.dataplex.v1.SearchEntriesResult.SnippetsC
Snippets7
dataplex_entry (2.google.cloud.dataplex.v1.Entry"�
SearchEntriesResponse>
results (2-.google.cloud.dataplex.v1.SearchEntriesResult

total_size (
next_page_token (	
unreachable (	*Q
	EntryView
ENTRY_VIEW_UNSPECIFIED 	
BASIC
FULL

CUSTOM
ALL*p
TransferStatus
TRANSFER_STATUS_UNSPECIFIED 
TRANSFER_STATUS_MIGRATED
TRANSFER_STATUS_TRANSFERRED2�#
CatalogService�
CreateEntryType0.google.cloud.dataplex.v1.CreateEntryTypeRequest.google.longrunning.Operation"��A
	EntryTypeOperationMetadata�Aparent,entry_type,entry_type_id���<"./v1/{parent=projects/*/locations/*}/entryTypes:
entry_type�
UpdateEntryType0.google.cloud.dataplex.v1.UpdateEntryTypeRequest.google.longrunning.Operation"��A
	EntryTypeOperationMetadata�Aentry_type,update_mask���G29/v1/{entry_type.name=projects/*/locations/*/entryTypes/*}:
entry_type�
DeleteEntryType0.google.cloud.dataplex.v1.DeleteEntryTypeRequest.google.longrunning.Operation"j�A*
google.protobuf.EmptyOperationMetadata�Aname���0*./v1/{name=projects/*/locations/*/entryTypes/*}�
ListEntryTypes/.google.cloud.dataplex.v1.ListEntryTypesRequest0.google.cloud.dataplex.v1.ListEntryTypesResponse"?�Aparent���0./v1/{parent=projects/*/locations/*}/entryTypes�
GetEntryType-.google.cloud.dataplex.v1.GetEntryTypeRequest#.google.cloud.dataplex.v1.EntryType"=�Aname���0./v1/{name=projects/*/locations/*/entryTypes/*}�
CreateAspectType1.google.cloud.dataplex.v1.CreateAspectTypeRequest.google.longrunning.Operation"��A

AspectTypeOperationMetadata�A!parent,aspect_type,aspect_type_id���>"//v1/{parent=projects/*/locations/*}/aspectTypes:aspect_type�
UpdateAspectType1.google.cloud.dataplex.v1.UpdateAspectTypeRequest.google.longrunning.Operation"��A

AspectTypeOperationMetadata�Aaspect_type,update_mask���J2;/v1/{aspect_type.name=projects/*/locations/*/aspectTypes/*}:aspect_type�
DeleteAspectType1.google.cloud.dataplex.v1.DeleteAspectTypeRequest.google.longrunning.Operation"k�A*
google.protobuf.EmptyOperationMetadata�Aname���1*//v1/{name=projects/*/locations/*/aspectTypes/*}�
ListAspectTypes0.google.cloud.dataplex.v1.ListAspectTypesRequest1.google.cloud.dataplex.v1.ListAspectTypesResponse"@�Aparent���1//v1/{parent=projects/*/locations/*}/aspectTypes�
GetAspectType..google.cloud.dataplex.v1.GetAspectTypeRequest$.google.cloud.dataplex.v1.AspectType">�Aname���1//v1/{name=projects/*/locations/*/aspectTypes/*}�
CreateEntryGroup1.google.cloud.dataplex.v1.CreateEntryGroupRequest.google.longrunning.Operation"��A

EntryGroupOperationMetadata�A!parent,entry_group,entry_group_id���>"//v1/{parent=projects/*/locations/*}/entryGroups:entry_group�
UpdateEntryGroup1.google.cloud.dataplex.v1.UpdateEntryGroupRequest.google.longrunning.Operation"��A

EntryGroupOperationMetadata�Aentry_group,update_mask���J2;/v1/{entry_group.name=projects/*/locations/*/entryGroups/*}:entry_group�
DeleteEntryGroup1.google.cloud.dataplex.v1.DeleteEntryGroupRequest.google.longrunning.Operation"k�A*
google.protobuf.EmptyOperationMetadata�Aname���1*//v1/{name=projects/*/locations/*/entryGroups/*}�
ListEntryGroups0.google.cloud.dataplex.v1.ListEntryGroupsRequest1.google.cloud.dataplex.v1.ListEntryGroupsResponse"@�Aparent���1//v1/{parent=projects/*/locations/*}/entryGroups�
GetEntryGroup..google.cloud.dataplex.v1.GetEntryGroupRequest$.google.cloud.dataplex.v1.EntryGroup">�Aname���1//v1/{name=projects/*/locations/*/entryGroups/*}�
CreateEntry,.google.cloud.dataplex.v1.CreateEntryRequest.google.cloud.dataplex.v1.Entry"`�Aparent,entry,entry_id���B"9/v1/{parent=projects/*/locations/*/entryGroups/*}/entries:entry�
UpdateEntry,.google.cloud.dataplex.v1.UpdateEntryRequest.google.cloud.dataplex.v1.Entry"c�Aentry,update_mask���I2@/v1/{entry.name=projects/*/locations/*/entryGroups/*/entries/**}:entry�
DeleteEntry,.google.cloud.dataplex.v1.DeleteEntryRequest.google.cloud.dataplex.v1.Entry"I�Aname���<*:/v1/{name=projects/*/locations/*/entryGroups/*/entries/**}�
ListEntries,.google.cloud.dataplex.v1.ListEntriesRequest-.google.cloud.dataplex.v1.ListEntriesResponse"J�Aparent���;9/v1/{parent=projects/*/locations/*/entryGroups/*}/entries�
GetEntry).google.cloud.dataplex.v1.GetEntryRequest.google.cloud.dataplex.v1.Entry"I�Aname���<:/v1/{name=projects/*/locations/*/entryGroups/*/entries/**}�
LookupEntry,.google.cloud.dataplex.v1.LookupEntryRequest.google.cloud.dataplex.v1.Entry"5���/-/v1/{name=projects/*/locations/*}:lookupEntry�
SearchEntries..google.cloud.dataplex.v1.SearchEntriesRequest/.google.cloud.dataplex.v1.SearchEntriesResponse"D�A
name,query���1"//v1/{name=projects/*/locations/*}:searchEntriesK�Adataplex.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.dataplex.v1BCatalogProtoPZ8cloud.google.com/go/dataplex/apiv1/dataplexpb;dataplexpb�Google.Cloud.Dataplex.V1�Google\\Cloud\\Dataplex\\V1�Google::Cloud::Dataplex::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

