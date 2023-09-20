<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/inventories/v1beta/localinventory.proto

namespace GPBMetadata\Google\Shopping\Merchant\Inventories\V1Beta;

class Localinventory
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
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Shopping\Type\Types::initOnce();
        \GPBMetadata\Google\Type\Interval::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
@google/shopping/merchant/inventories/v1beta/localinventory.proto+google.shopping.merchant.inventories.v1betagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/empty.proto google/shopping/type/types.protogoogle/type/interval.proto"�
LocalInventory
name (	B�A
account (B�A

store_code (	B�A*
price (2.google.shopping.type.Price/

sale_price (2.google.shopping.type.Price8
sale_price_effective_date (2.google.type.Interval
availability (	H �
quantity (H�
pickup_method	 (	H�

pickup_sla
 (	H�%
instore_product_location (	H�@
custom_attributes (2%.google.shopping.type.CustomAttribute:s�Ap
)merchantapi.googleapis.com/LocalInventoryCaccounts/{account}/products/{product}/localInventories/{store_code}B
_availabilityB
	_quantityB
_pickup_methodB
_pickup_slaB
_instore_product_location"Y
ListLocalInventoriesRequest
parent (	B�A
	page_size (

page_token (	"�
ListLocalInventoriesResponseV
local_inventories (2;.google.shopping.merchant.inventories.v1beta.LocalInventory
next_page_token (	"�
InsertLocalInventoryRequest
parent (	B�AY
local_inventory (2;.google.shopping.merchant.inventories.v1beta.LocalInventoryB�A"^
DeleteLocalInventoryRequest?
name (	B1�A�A+
)merchantapi.googleapis.com/LocalInventory2�
LocalInventoryService�
ListLocalInventoriesH.google.shopping.merchant.inventories.v1beta.ListLocalInventoriesRequestI.google.shopping.merchant.inventories.v1beta.ListLocalInventoriesResponse"T���EC/inventories/v1beta/{parent=accounts/*/products/*}/localInventories�Aparent�
InsertLocalInventoryH.google.shopping.merchant.inventories.v1beta.InsertLocalInventoryRequest;.google.shopping.merchant.inventories.v1beta.LocalInventory"c���]"J/inventories/v1beta/{parent=accounts/*/products/*}/localInventories:insert:local_inventory�
DeleteLocalInventoryH.google.shopping.merchant.inventories.v1beta.DeleteLocalInventoryRequest.google.protobuf.Empty"R���E*C/inventories/v1beta/{name=accounts/*/products/*/localInventories/*}�AnameG�Amerchantapi.googleapis.com�A\'https://www.googleapis.com/auth/contentB�
/com.google.shopping.merchant.inventories.v1betaBLocalInventoryProtoPZVgoogle.golang.org/genproto/googleapis/shopping/merchant/inventories/v1beta;inventoriesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

