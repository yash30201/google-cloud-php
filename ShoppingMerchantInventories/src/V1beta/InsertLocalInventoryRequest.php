<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/inventories/v1beta/localinventory.proto

namespace Google\Shopping\Merchant\Inventories\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the `InsertLocalInventory` method.
 *
 * Generated from protobuf message <code>google.shopping.merchant.inventories.v1beta.InsertLocalInventoryRequest</code>
 */
class InsertLocalInventoryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The account and product where this inventory will be inserted.
     * Format: `accounts/{account}/products/{product}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Local inventory information of the product. If the product
     * already has a `LocalInventory` resource for the same `storeCode`, full
     * replacement of the `LocalInventory` resource is performed.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.inventories.v1beta.LocalInventory local_inventory = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $local_inventory = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The account and product where this inventory will be inserted.
     *           Format: `accounts/{account}/products/{product}`
     *     @type \Google\Shopping\Merchant\Inventories\V1beta\LocalInventory $local_inventory
     *           Required. Local inventory information of the product. If the product
     *           already has a `LocalInventory` resource for the same `storeCode`, full
     *           replacement of the `LocalInventory` resource is performed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Inventories\V1Beta\Localinventory::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The account and product where this inventory will be inserted.
     * Format: `accounts/{account}/products/{product}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The account and product where this inventory will be inserted.
     * Format: `accounts/{account}/products/{product}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. Local inventory information of the product. If the product
     * already has a `LocalInventory` resource for the same `storeCode`, full
     * replacement of the `LocalInventory` resource is performed.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.inventories.v1beta.LocalInventory local_inventory = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Shopping\Merchant\Inventories\V1beta\LocalInventory|null
     */
    public function getLocalInventory()
    {
        return $this->local_inventory;
    }

    public function hasLocalInventory()
    {
        return isset($this->local_inventory);
    }

    public function clearLocalInventory()
    {
        unset($this->local_inventory);
    }

    /**
     * Required. Local inventory information of the product. If the product
     * already has a `LocalInventory` resource for the same `storeCode`, full
     * replacement of the `LocalInventory` resource is performed.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.inventories.v1beta.LocalInventory local_inventory = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Shopping\Merchant\Inventories\V1beta\LocalInventory $var
     * @return $this
     */
    public function setLocalInventory($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Inventories\V1beta\LocalInventory::class);
        $this->local_inventory = $var;

        return $this;
    }

}

