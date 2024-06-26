<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/service.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List sessions request.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.ListSessionsRequest</code>
 */
class ListSessionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the parent environment:
     * `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/environment/{environment_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. Maximum number of sessions to return. The service may return
     * fewer than this value. If unspecified, at most 10 sessions will be
     * returned. The maximum value is 1000; values above 1000 will be coerced to
     * 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. Page token received from a previous `ListSessions` call. Provide
     * this to retrieve the subsequent page. When paginating, all other parameters
     * provided to `ListSessions` must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. Filter request. The following `mode` filter is supported to
     * return only the sessions belonging to the requester when the mode is USER
     * and return sessions of all the users when the mode is ADMIN. When no filter
     * is sent default to USER mode. NOTE: When the mode is ADMIN, the requester
     * should have `dataplex.environments.listAllSessions` permission to list all
     * sessions, in absence of the permission, the request fails.
     * mode = ADMIN | USER
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter = '';

    /**
     * @param string $parent Required. The resource name of the parent environment:
     *                       `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/environment/{environment_id}`. Please see
     *                       {@see DataplexServiceClient::environmentName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dataplex\V1\ListSessionsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the parent environment:
     *           `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/environment/{environment_id}`.
     *     @type int $page_size
     *           Optional. Maximum number of sessions to return. The service may return
     *           fewer than this value. If unspecified, at most 10 sessions will be
     *           returned. The maximum value is 1000; values above 1000 will be coerced to
     *           1000.
     *     @type string $page_token
     *           Optional. Page token received from a previous `ListSessions` call. Provide
     *           this to retrieve the subsequent page. When paginating, all other parameters
     *           provided to `ListSessions` must match the call that provided the page
     *           token.
     *     @type string $filter
     *           Optional. Filter request. The following `mode` filter is supported to
     *           return only the sessions belonging to the requester when the mode is USER
     *           and return sessions of all the users when the mode is ADMIN. When no filter
     *           is sent default to USER mode. NOTE: When the mode is ADMIN, the requester
     *           should have `dataplex.environments.listAllSessions` permission to list all
     *           sessions, in absence of the permission, the request fails.
     *           mode = ADMIN | USER
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the parent environment:
     * `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/environment/{environment_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the parent environment:
     * `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/environment/{environment_id}`.
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
     * Optional. Maximum number of sessions to return. The service may return
     * fewer than this value. If unspecified, at most 10 sessions will be
     * returned. The maximum value is 1000; values above 1000 will be coerced to
     * 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Maximum number of sessions to return. The service may return
     * fewer than this value. If unspecified, at most 10 sessions will be
     * returned. The maximum value is 1000; values above 1000 will be coerced to
     * 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. Page token received from a previous `ListSessions` call. Provide
     * this to retrieve the subsequent page. When paginating, all other parameters
     * provided to `ListSessions` must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. Page token received from a previous `ListSessions` call. Provide
     * this to retrieve the subsequent page. When paginating, all other parameters
     * provided to `ListSessions` must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. Filter request. The following `mode` filter is supported to
     * return only the sessions belonging to the requester when the mode is USER
     * and return sessions of all the users when the mode is ADMIN. When no filter
     * is sent default to USER mode. NOTE: When the mode is ADMIN, the requester
     * should have `dataplex.environments.listAllSessions` permission to list all
     * sessions, in absence of the permission, the request fails.
     * mode = ADMIN | USER
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. Filter request. The following `mode` filter is supported to
     * return only the sessions belonging to the requester when the mode is USER
     * and return sessions of all the users when the mode is ADMIN. When no filter
     * is sent default to USER mode. NOTE: When the mode is ADMIN, the requester
     * should have `dataplex.environments.listAllSessions` permission to list all
     * sessions, in absence of the permission, the request fails.
     * mode = ADMIN | USER
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

