<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/bigtable.proto

namespace Google\Cloud\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BigtableService.MutateRows.
 *
 * Generated from protobuf message <code>google.bigtable.v2.MutateRowsRequest</code>
 */
class MutateRowsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The unique name of the table to which the mutations should be
     * applied.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string table_name = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $table_name = '';
    /**
     * Optional. The unique name of the AuthorizedView to which the mutations
     * should be applied.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>/authorizedViews/<authorized_view>`.
     *
     * Generated from protobuf field <code>string authorized_view_name = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $authorized_view_name = '';
    /**
     * This value specifies routing for replication. If not specified, the
     * "default" application profile will be used.
     *
     * Generated from protobuf field <code>string app_profile_id = 3;</code>
     */
    protected $app_profile_id = '';
    /**
     * Required. The row keys and corresponding mutations to be applied in bulk.
     * Each entry is applied as an atomic mutation, but the entries may be
     * applied in arbitrary order (even between entries for the same row).
     * At least one entry must be specified, and in total the entries can
     * contain at most 100000 mutations.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.MutateRowsRequest.Entry entries = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $entries;

    /**
     * @param string                                              $tableName Optional. The unique name of the table to which the mutations should be
     *                                                                       applied.
     *
     *                                                                       Values are of the form
     *                                                                       `projects/<project>/instances/<instance>/tables/<table>`. Please see
     *                                                                       {@see BigtableClient::tableName()} for help formatting this field.
     * @param \Google\Cloud\Bigtable\V2\MutateRowsRequest\Entry[] $entries   Required. The row keys and corresponding mutations to be applied in bulk.
     *                                                                       Each entry is applied as an atomic mutation, but the entries may be
     *                                                                       applied in arbitrary order (even between entries for the same row).
     *                                                                       At least one entry must be specified, and in total the entries can
     *                                                                       contain at most 100000 mutations.
     *
     * @return \Google\Cloud\Bigtable\V2\MutateRowsRequest
     *
     * @experimental
     */
    public static function build(string $tableName, array $entries): self
    {
        return (new self())
            ->setTableName($tableName)
            ->setEntries($entries);
    }

    /**
     * @param string                                              $tableName    Optional. The unique name of the table to which the mutations should be
     *                                                                          applied.
     *
     *                                                                          Values are of the form
     *                                                                          `projects/<project>/instances/<instance>/tables/<table>`. Please see
     *                                                                          {@see BigtableClient::tableName()} for help formatting this field.
     * @param \Google\Cloud\Bigtable\V2\MutateRowsRequest\Entry[] $entries      Required. The row keys and corresponding mutations to be applied in bulk.
     *                                                                          Each entry is applied as an atomic mutation, but the entries may be
     *                                                                          applied in arbitrary order (even between entries for the same row).
     *                                                                          At least one entry must be specified, and in total the entries can
     *                                                                          contain at most 100000 mutations.
     * @param string                                              $appProfileId This value specifies routing for replication. If not specified, the
     *                                                                          "default" application profile will be used.
     *
     * @return \Google\Cloud\Bigtable\V2\MutateRowsRequest
     *
     * @experimental
     */
    public static function buildFromTableNameEntriesAppProfileId(string $tableName, array $entries, string $appProfileId): self
    {
        return (new self())
            ->setTableName($tableName)
            ->setEntries($entries)
            ->setAppProfileId($appProfileId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $table_name
     *           Optional. The unique name of the table to which the mutations should be
     *           applied.
     *           Values are of the form
     *           `projects/<project>/instances/<instance>/tables/<table>`.
     *     @type string $authorized_view_name
     *           Optional. The unique name of the AuthorizedView to which the mutations
     *           should be applied.
     *           Values are of the form
     *           `projects/<project>/instances/<instance>/tables/<table>/authorizedViews/<authorized_view>`.
     *     @type string $app_profile_id
     *           This value specifies routing for replication. If not specified, the
     *           "default" application profile will be used.
     *     @type array<\Google\Cloud\Bigtable\V2\MutateRowsRequest\Entry>|\Google\Protobuf\Internal\RepeatedField $entries
     *           Required. The row keys and corresponding mutations to be applied in bulk.
     *           Each entry is applied as an atomic mutation, but the entries may be
     *           applied in arbitrary order (even between entries for the same row).
     *           At least one entry must be specified, and in total the entries can
     *           contain at most 100000 mutations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Bigtable::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The unique name of the table to which the mutations should be
     * applied.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string table_name = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * Optional. The unique name of the table to which the mutations should be
     * applied.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string table_name = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTableName($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_name = $var;

        return $this;
    }

    /**
     * Optional. The unique name of the AuthorizedView to which the mutations
     * should be applied.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>/authorizedViews/<authorized_view>`.
     *
     * Generated from protobuf field <code>string authorized_view_name = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAuthorizedViewName()
    {
        return $this->authorized_view_name;
    }

    /**
     * Optional. The unique name of the AuthorizedView to which the mutations
     * should be applied.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>/authorizedViews/<authorized_view>`.
     *
     * Generated from protobuf field <code>string authorized_view_name = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAuthorizedViewName($var)
    {
        GPBUtil::checkString($var, True);
        $this->authorized_view_name = $var;

        return $this;
    }

    /**
     * This value specifies routing for replication. If not specified, the
     * "default" application profile will be used.
     *
     * Generated from protobuf field <code>string app_profile_id = 3;</code>
     * @return string
     */
    public function getAppProfileId()
    {
        return $this->app_profile_id;
    }

    /**
     * This value specifies routing for replication. If not specified, the
     * "default" application profile will be used.
     *
     * Generated from protobuf field <code>string app_profile_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAppProfileId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_profile_id = $var;

        return $this;
    }

    /**
     * Required. The row keys and corresponding mutations to be applied in bulk.
     * Each entry is applied as an atomic mutation, but the entries may be
     * applied in arbitrary order (even between entries for the same row).
     * At least one entry must be specified, and in total the entries can
     * contain at most 100000 mutations.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.MutateRowsRequest.Entry entries = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * Required. The row keys and corresponding mutations to be applied in bulk.
     * Each entry is applied as an atomic mutation, but the entries may be
     * applied in arbitrary order (even between entries for the same row).
     * At least one entry must be specified, and in total the entries can
     * contain at most 100000 mutations.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.MutateRowsRequest.Entry entries = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\Bigtable\V2\MutateRowsRequest\Entry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Bigtable\V2\MutateRowsRequest\Entry::class);
        $this->entries = $arr;

        return $this;
    }

}

