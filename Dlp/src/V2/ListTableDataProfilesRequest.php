<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to list the profiles generated for a given organization or project.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.ListTableDataProfilesRequest</code>
 */
class ListTableDataProfilesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the organization or project, for
     * example `organizations/433245324/locations/europe` or
     * `projects/project-id/locations/asia`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Page token to continue retrieval.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     */
    private $page_token = '';
    /**
     * Size of the page. This value can be limited by the server. If zero, server
     * returns a page of max size 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * Comma separated list of fields to order by, followed by `asc` or `desc`
     * postfix. This list is case insensitive. The default sorting order is
     * ascending. Redundant space characters are insignificant. Only one order
     * field at a time is allowed.
     * Examples:
     * * `project_id asc`
     * * `table_id`
     * * `sensitivity_level desc`
     * Supported fields are:
     * - `project_id`: The Google Cloud project ID.
     * - `dataset_id`: The ID of a BigQuery dataset.
     * - `table_id`: The ID of a BigQuery table.
     * - `sensitivity_level`: How sensitive the data in a table is, at most.
     * - `data_risk_level`: How much risk is associated with this data.
     * - `profile_last_generated`: When the profile was last updated in epoch
     * seconds.
     * - `last_modified`: The last time the resource was modified.
     * - `resource_visibility`: Visibility restriction for this resource.
     * - `row_count`: Number of rows in this resource.
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     */
    private $order_by = '';
    /**
     * Allows filtering.
     * Supported syntax:
     * * Filter expressions are made up of one or more restrictions.
     * * Restrictions can be combined by `AND` or `OR` logical operators. A
     * sequence of restrictions implicitly uses `AND`.
     * * A restriction has the form of `{field} {operator} {value}`.
     * * Supported fields/values:
     *     - `project_id` - The Google Cloud project ID.
     *     - `dataset_id` - The BigQuery dataset ID.
     *     - `table_id` - The ID of the BigQuery table.
     *     - `sensitivity_level` - HIGH|MODERATE|LOW
     *     - `data_risk_level` - HIGH|MODERATE|LOW
     *     - `resource_visibility`: PUBLIC|RESTRICTED
     *     - `status_code` - an RPC status code as defined in
     *     https://github.com/googleapis/googleapis/blob/master/google/rpc/code.proto
     * * The operator must be `=` or `!=`.
     * Examples:
     * * `project_id = 12345 AND status_code = 1`
     * * `project_id = 12345 AND sensitivity_level = HIGH`
     * * `project_id = 12345 AND resource_visibility = PUBLIC`
     * The length of this field should be no more than 500 characters.
     *
     * Generated from protobuf field <code>string filter = 5;</code>
     */
    private $filter = '';

    /**
     * @param string $parent Required. Resource name of the organization or project, for
     *                       example `organizations/433245324/locations/europe` or
     *                       `projects/project-id/locations/asia`. Please see
     *                       {@see DlpServiceClient::organizationLocationName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dlp\V2\ListTableDataProfilesRequest
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
     *           Required. Resource name of the organization or project, for
     *           example `organizations/433245324/locations/europe` or
     *           `projects/project-id/locations/asia`.
     *     @type string $page_token
     *           Page token to continue retrieval.
     *     @type int $page_size
     *           Size of the page. This value can be limited by the server. If zero, server
     *           returns a page of max size 100.
     *     @type string $order_by
     *           Comma separated list of fields to order by, followed by `asc` or `desc`
     *           postfix. This list is case insensitive. The default sorting order is
     *           ascending. Redundant space characters are insignificant. Only one order
     *           field at a time is allowed.
     *           Examples:
     *           * `project_id asc`
     *           * `table_id`
     *           * `sensitivity_level desc`
     *           Supported fields are:
     *           - `project_id`: The Google Cloud project ID.
     *           - `dataset_id`: The ID of a BigQuery dataset.
     *           - `table_id`: The ID of a BigQuery table.
     *           - `sensitivity_level`: How sensitive the data in a table is, at most.
     *           - `data_risk_level`: How much risk is associated with this data.
     *           - `profile_last_generated`: When the profile was last updated in epoch
     *           seconds.
     *           - `last_modified`: The last time the resource was modified.
     *           - `resource_visibility`: Visibility restriction for this resource.
     *           - `row_count`: Number of rows in this resource.
     *     @type string $filter
     *           Allows filtering.
     *           Supported syntax:
     *           * Filter expressions are made up of one or more restrictions.
     *           * Restrictions can be combined by `AND` or `OR` logical operators. A
     *           sequence of restrictions implicitly uses `AND`.
     *           * A restriction has the form of `{field} {operator} {value}`.
     *           * Supported fields/values:
     *               - `project_id` - The Google Cloud project ID.
     *               - `dataset_id` - The BigQuery dataset ID.
     *               - `table_id` - The ID of the BigQuery table.
     *               - `sensitivity_level` - HIGH|MODERATE|LOW
     *               - `data_risk_level` - HIGH|MODERATE|LOW
     *               - `resource_visibility`: PUBLIC|RESTRICTED
     *               - `status_code` - an RPC status code as defined in
     *               https://github.com/googleapis/googleapis/blob/master/google/rpc/code.proto
     *           * The operator must be `=` or `!=`.
     *           Examples:
     *           * `project_id = 12345 AND status_code = 1`
     *           * `project_id = 12345 AND sensitivity_level = HIGH`
     *           * `project_id = 12345 AND resource_visibility = PUBLIC`
     *           The length of this field should be no more than 500 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the organization or project, for
     * example `organizations/433245324/locations/europe` or
     * `projects/project-id/locations/asia`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name of the organization or project, for
     * example `organizations/433245324/locations/europe` or
     * `projects/project-id/locations/asia`.
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
     * Page token to continue retrieval.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Page token to continue retrieval.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
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
     * Size of the page. This value can be limited by the server. If zero, server
     * returns a page of max size 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Size of the page. This value can be limited by the server. If zero, server
     * returns a page of max size 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
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
     * Comma separated list of fields to order by, followed by `asc` or `desc`
     * postfix. This list is case insensitive. The default sorting order is
     * ascending. Redundant space characters are insignificant. Only one order
     * field at a time is allowed.
     * Examples:
     * * `project_id asc`
     * * `table_id`
     * * `sensitivity_level desc`
     * Supported fields are:
     * - `project_id`: The Google Cloud project ID.
     * - `dataset_id`: The ID of a BigQuery dataset.
     * - `table_id`: The ID of a BigQuery table.
     * - `sensitivity_level`: How sensitive the data in a table is, at most.
     * - `data_risk_level`: How much risk is associated with this data.
     * - `profile_last_generated`: When the profile was last updated in epoch
     * seconds.
     * - `last_modified`: The last time the resource was modified.
     * - `resource_visibility`: Visibility restriction for this resource.
     * - `row_count`: Number of rows in this resource.
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Comma separated list of fields to order by, followed by `asc` or `desc`
     * postfix. This list is case insensitive. The default sorting order is
     * ascending. Redundant space characters are insignificant. Only one order
     * field at a time is allowed.
     * Examples:
     * * `project_id asc`
     * * `table_id`
     * * `sensitivity_level desc`
     * Supported fields are:
     * - `project_id`: The Google Cloud project ID.
     * - `dataset_id`: The ID of a BigQuery dataset.
     * - `table_id`: The ID of a BigQuery table.
     * - `sensitivity_level`: How sensitive the data in a table is, at most.
     * - `data_risk_level`: How much risk is associated with this data.
     * - `profile_last_generated`: When the profile was last updated in epoch
     * seconds.
     * - `last_modified`: The last time the resource was modified.
     * - `resource_visibility`: Visibility restriction for this resource.
     * - `row_count`: Number of rows in this resource.
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

    /**
     * Allows filtering.
     * Supported syntax:
     * * Filter expressions are made up of one or more restrictions.
     * * Restrictions can be combined by `AND` or `OR` logical operators. A
     * sequence of restrictions implicitly uses `AND`.
     * * A restriction has the form of `{field} {operator} {value}`.
     * * Supported fields/values:
     *     - `project_id` - The Google Cloud project ID.
     *     - `dataset_id` - The BigQuery dataset ID.
     *     - `table_id` - The ID of the BigQuery table.
     *     - `sensitivity_level` - HIGH|MODERATE|LOW
     *     - `data_risk_level` - HIGH|MODERATE|LOW
     *     - `resource_visibility`: PUBLIC|RESTRICTED
     *     - `status_code` - an RPC status code as defined in
     *     https://github.com/googleapis/googleapis/blob/master/google/rpc/code.proto
     * * The operator must be `=` or `!=`.
     * Examples:
     * * `project_id = 12345 AND status_code = 1`
     * * `project_id = 12345 AND sensitivity_level = HIGH`
     * * `project_id = 12345 AND resource_visibility = PUBLIC`
     * The length of this field should be no more than 500 characters.
     *
     * Generated from protobuf field <code>string filter = 5;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Allows filtering.
     * Supported syntax:
     * * Filter expressions are made up of one or more restrictions.
     * * Restrictions can be combined by `AND` or `OR` logical operators. A
     * sequence of restrictions implicitly uses `AND`.
     * * A restriction has the form of `{field} {operator} {value}`.
     * * Supported fields/values:
     *     - `project_id` - The Google Cloud project ID.
     *     - `dataset_id` - The BigQuery dataset ID.
     *     - `table_id` - The ID of the BigQuery table.
     *     - `sensitivity_level` - HIGH|MODERATE|LOW
     *     - `data_risk_level` - HIGH|MODERATE|LOW
     *     - `resource_visibility`: PUBLIC|RESTRICTED
     *     - `status_code` - an RPC status code as defined in
     *     https://github.com/googleapis/googleapis/blob/master/google/rpc/code.proto
     * * The operator must be `=` or `!=`.
     * Examples:
     * * `project_id = 12345 AND status_code = 1`
     * * `project_id = 12345 AND sensitivity_level = HIGH`
     * * `project_id = 12345 AND resource_visibility = PUBLIC`
     * The length of this field should be no more than 500 characters.
     *
     * Generated from protobuf field <code>string filter = 5;</code>
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

