<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [UpdateAuthorizedView][google.bigtable.admin.v2.BigtableTableAdmin.UpdateAuthorizedView].
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.UpdateAuthorizedViewRequest</code>
 */
class UpdateAuthorizedViewRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The AuthorizedView to update. The `name` in `authorized_view` is
     * used to identify the AuthorizedView. AuthorizedView name must in this
     * format
     * projects/<project>/instances/<instance>/tables/<table>/authorizedViews/<authorized_view>
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.AuthorizedView authorized_view = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $authorized_view = null;
    /**
     * Optional. The list of fields to update.
     * A mask specifying which fields in the AuthorizedView resource should be
     * updated. This mask is relative to the AuthorizedView resource, not to the
     * request message. A field will be overwritten if it is in the mask. If
     * empty, all fields set in the request will be overwritten. A special value
     * `*` means to overwrite all fields (including fields not set in the
     * request).
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;
    /**
     * Optional. If true, ignore the safety checks when updating the
     * AuthorizedView.
     *
     * Generated from protobuf field <code>bool ignore_warnings = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $ignore_warnings = false;

    /**
     * @param \Google\Cloud\Bigtable\Admin\V2\AuthorizedView $authorizedView Required. The AuthorizedView to update. The `name` in `authorized_view` is
     *                                                                       used to identify the AuthorizedView. AuthorizedView name must in this
     *                                                                       format
     *                                                                       projects/<project>/instances/<instance>/tables/<table>/authorizedViews/<authorized_view>
     * @param \Google\Protobuf\FieldMask                     $updateMask     Optional. The list of fields to update.
     *                                                                       A mask specifying which fields in the AuthorizedView resource should be
     *                                                                       updated. This mask is relative to the AuthorizedView resource, not to the
     *                                                                       request message. A field will be overwritten if it is in the mask. If
     *                                                                       empty, all fields set in the request will be overwritten. A special value
     *                                                                       `*` means to overwrite all fields (including fields not set in the
     *                                                                       request).
     *
     * @return \Google\Cloud\Bigtable\Admin\V2\UpdateAuthorizedViewRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Bigtable\Admin\V2\AuthorizedView $authorizedView, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setAuthorizedView($authorizedView)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigtable\Admin\V2\AuthorizedView $authorized_view
     *           Required. The AuthorizedView to update. The `name` in `authorized_view` is
     *           used to identify the AuthorizedView. AuthorizedView name must in this
     *           format
     *           projects/<project>/instances/<instance>/tables/<table>/authorizedViews/<authorized_view>
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. The list of fields to update.
     *           A mask specifying which fields in the AuthorizedView resource should be
     *           updated. This mask is relative to the AuthorizedView resource, not to the
     *           request message. A field will be overwritten if it is in the mask. If
     *           empty, all fields set in the request will be overwritten. A special value
     *           `*` means to overwrite all fields (including fields not set in the
     *           request).
     *     @type bool $ignore_warnings
     *           Optional. If true, ignore the safety checks when updating the
     *           AuthorizedView.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The AuthorizedView to update. The `name` in `authorized_view` is
     * used to identify the AuthorizedView. AuthorizedView name must in this
     * format
     * projects/<project>/instances/<instance>/tables/<table>/authorizedViews/<authorized_view>
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.AuthorizedView authorized_view = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\AuthorizedView|null
     */
    public function getAuthorizedView()
    {
        return $this->authorized_view;
    }

    public function hasAuthorizedView()
    {
        return isset($this->authorized_view);
    }

    public function clearAuthorizedView()
    {
        unset($this->authorized_view);
    }

    /**
     * Required. The AuthorizedView to update. The `name` in `authorized_view` is
     * used to identify the AuthorizedView. AuthorizedView name must in this
     * format
     * projects/<project>/instances/<instance>/tables/<table>/authorizedViews/<authorized_view>
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.AuthorizedView authorized_view = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\AuthorizedView $var
     * @return $this
     */
    public function setAuthorizedView($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\AuthorizedView::class);
        $this->authorized_view = $var;

        return $this;
    }

    /**
     * Optional. The list of fields to update.
     * A mask specifying which fields in the AuthorizedView resource should be
     * updated. This mask is relative to the AuthorizedView resource, not to the
     * request message. A field will be overwritten if it is in the mask. If
     * empty, all fields set in the request will be overwritten. A special value
     * `*` means to overwrite all fields (including fields not set in the
     * request).
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Optional. The list of fields to update.
     * A mask specifying which fields in the AuthorizedView resource should be
     * updated. This mask is relative to the AuthorizedView resource, not to the
     * request message. A field will be overwritten if it is in the mask. If
     * empty, all fields set in the request will be overwritten. A special value
     * `*` means to overwrite all fields (including fields not set in the
     * request).
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Optional. If true, ignore the safety checks when updating the
     * AuthorizedView.
     *
     * Generated from protobuf field <code>bool ignore_warnings = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getIgnoreWarnings()
    {
        return $this->ignore_warnings;
    }

    /**
     * Optional. If true, ignore the safety checks when updating the
     * AuthorizedView.
     *
     * Generated from protobuf field <code>bool ignore_warnings = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreWarnings($var)
    {
        GPBUtil::checkBool($var);
        $this->ignore_warnings = $var;

        return $this;
    }

}

