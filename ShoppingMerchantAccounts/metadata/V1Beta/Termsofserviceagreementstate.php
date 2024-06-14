<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/termsofserviceagreementstate.proto

namespace GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta;

class Termsofserviceagreementstate
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
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\Termsofservicekind::initOnce();
        \GPBMetadata\Google\Type\Date::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Kgoogle/shopping/merchant/accounts/v1beta/termsofserviceagreementstate.proto(google.shopping.merchant.accounts.v1betagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protoAgoogle/shopping/merchant/accounts/v1beta/termsofservicekind.protogoogle/type/date.proto"�
TermsOfServiceAgreementState
name (	B�A
region_code (	[
terms_of_service_kind (2<.google.shopping.merchant.accounts.v1beta.TermsOfServiceKindI
accepted (22.google.shopping.merchant.accounts.v1beta.AcceptedH �I
required (22.google.shopping.merchant.accounts.v1beta.RequiredH�:��A�
7merchantapi.googleapis.com/TermsOfServiceAgreementState=accounts/{account}/termsOfServiceAgreementStates/{identifier}*termsOfServiceAgreementStates2termsOfServiceAgreementStateB
	_acceptedB
	_required"�
AcceptedH
terms_of_service (	B.�A+
)merchantapi.googleapis.com/TermsOfService<
accepted_by (	B\'�A$
"merchantapi.googleapis.com/Account+
valid_until (2.google.type.DateH �B
_valid_until"j
RequiredH
terms_of_service (	B.�A+
)merchantapi.googleapis.com/TermsOfService
tos_file_uri (	"w
&GetTermsOfServiceAgreementStateRequestM
name (	B?�A�A9
7merchantapi.googleapis.com/TermsOfServiceAgreementState"�
9RetrieveForApplicationTermsOfServiceAgreementStateRequestO
parent (	B?�A�A97merchantapi.googleapis.com/TermsOfServiceAgreementState2�
#TermsOfServiceAgreementStateService�
GetTermsOfServiceAgreementStateP.google.shopping.merchant.accounts.v1beta.GetTermsOfServiceAgreementStateRequestF.google.shopping.merchant.accounts.v1beta.TermsOfServiceAgreementState"Q�Aname���DB/accounts/v1beta/{name=accounts/*/termsOfServiceAgreementStates/*}�
2RetrieveForApplicationTermsOfServiceAgreementStatec.google.shopping.merchant.accounts.v1beta.RetrieveForApplicationTermsOfServiceAgreementStateRequestF.google.shopping.merchant.accounts.v1beta.TermsOfServiceAgreementState"j�Aparent���[Y/accounts/v1beta/{parent=accounts/*}/termsOfServiceAgreementStates:retrieveForApplicationG�Amerchantapi.googleapis.com�A\'https://www.googleapis.com/auth/contentB�
,com.google.shopping.merchant.accounts.v1betaB!TermsOfServiceAgreementStateProtoPZNcloud.google.com/go/shopping/merchant/accounts/apiv1beta/accountspb;accountspbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

