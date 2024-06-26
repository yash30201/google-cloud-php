<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/user.proto

namespace GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta;

class User
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
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\Accessright::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
3google/shopping/merchant/accounts/v1beta/user.proto(google.shopping.merchant.accounts.v1betagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto:google/shopping/merchant/accounts/v1beta/accessright.proto"�
User
name (	B�AH
state (24.google.shopping.merchant.accounts.v1beta.User.StateB�AQ
access_rights (25.google.shopping.merchant.accounts.v1beta.AccessRightB�A"9
State
STATE_UNSPECIFIED 
PENDING
VERIFIED:S�AP
merchantapi.googleapis.com/User accounts/{account}/users/{email}*users2user"G
GetUserRequest5
name (	B\'�A�A!
merchantapi.googleapis.com/User"�
CreateUserRequest:
parent (	B*�A�A$
"merchantapi.googleapis.com/Account
user_id (	B�AA
user (2..google.shopping.merchant.accounts.v1beta.UserB�A"J
DeleteUserRequest5
name (	B\'�A�A!
merchantapi.googleapis.com/User"�
UpdateUserRequestA
user (2..google.shopping.merchant.accounts.v1beta.UserB�A4
update_mask (2.google.protobuf.FieldMaskB�A"
ListUsersRequest:
parent (	B*�A�A$
"merchantapi.googleapis.com/Account
	page_size (B�A

page_token (	B�A"k
ListUsersResponse=
users (2..google.shopping.merchant.accounts.v1beta.User
next_page_token (	2�
UserService�
GetUser8.google.shopping.merchant.accounts.v1beta.GetUserRequest..google.shopping.merchant.accounts.v1beta.User"9�Aname���,*/accounts/v1beta/{name=accounts/*/users/*}�

CreateUser;.google.shopping.merchant.accounts.v1beta.CreateUserRequest..google.shopping.merchant.accounts.v1beta.User"F�Aparent,user���2"*/accounts/v1beta/{parent=accounts/*}/users:user�

DeleteUser;.google.shopping.merchant.accounts.v1beta.DeleteUserRequest.google.protobuf.Empty"9�Aname���,**/accounts/v1beta/{name=accounts/*/users/*}�

UpdateUser;.google.shopping.merchant.accounts.v1beta.UpdateUserRequest..google.shopping.merchant.accounts.v1beta.User"P�Auser,update_mask���72//accounts/v1beta/{user.name=accounts/*/users/*}:user�
	ListUsers:.google.shopping.merchant.accounts.v1beta.ListUsersRequest;.google.shopping.merchant.accounts.v1beta.ListUsersResponse";�Aparent���,*/accounts/v1beta/{parent=accounts/*}/usersG�Amerchantapi.googleapis.com�A\'https://www.googleapis.com/auth/contentB�
,com.google.shopping.merchant.accounts.v1betaB	UserProtoPZNcloud.google.com/go/shopping/merchant/accounts/apiv1beta/accountspb;accountspbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

