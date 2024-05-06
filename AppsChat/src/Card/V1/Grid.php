<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/card/v1/card.proto

namespace Google\Apps\Card\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Displays a grid with a collection of items. Items can only include text or
 * images. For responsive columns, or to include more than text or images, use
 * [`Columns`][google.apps.card.v1.Columns]. For an example in Google Chat apps,
 * see [Display a Grid with a collection of
 * items](https://developers.google.com/workspace/chat/format-structure-card-dialog#display_a_grid_with_a_collection_of_items).
 * A grid supports any number of columns and items. The number of rows is
 * determined by items divided by columns. A grid with
 * 10 items and 2 columns has 5 rows. A grid with 11 items and 2 columns
 * has 6 rows.
 * [Google Workspace Add-ons and Chat
 * apps](https://developers.google.com/workspace/extend):
 * For example, the following JSON creates a 2 column grid with a single
 * item:
 * ```
 * "grid": {
 *   "title": "A fine collection of items",
 *   "columnCount": 2,
 *   "borderStyle": {
 *     "type": "STROKE",
 *     "cornerRadius": 4
 *   },
 *   "items": [
 *     {
 *       "image": {
 *         "imageUri": "https://www.example.com/image.png",
 *         "cropStyle": {
 *           "type": "SQUARE"
 *         },
 *         "borderStyle": {
 *           "type": "STROKE"
 *         }
 *       },
 *       "title": "An item",
 *       "textAlignment": "CENTER"
 *     }
 *   ],
 *   "onClick": {
 *     "openLink": {
 *       "url": "https://www.example.com"
 *     }
 *   }
 * }
 * ```
 *
 * Generated from protobuf message <code>google.apps.card.v1.Grid</code>
 */
class Grid extends \Google\Protobuf\Internal\Message
{
    /**
     * The text that displays in the grid header.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     */
    protected $title = '';
    /**
     * The items to display in the grid.
     *
     * Generated from protobuf field <code>repeated .google.apps.card.v1.Grid.GridItem items = 2;</code>
     */
    private $items;
    /**
     * The border style to apply to each grid item.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.BorderStyle border_style = 3;</code>
     */
    protected $border_style = null;
    /**
     * The number of columns to display in the grid. A default value
     * is used if this field isn't specified, and that default value is
     * different depending on where the grid is shown (dialog versus companion).
     *
     * Generated from protobuf field <code>int32 column_count = 4;</code>
     */
    protected $column_count = 0;
    /**
     * This callback is reused by each individual grid item, but with the
     * item's identifier and index in the items list added to the callback's
     * parameters.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.OnClick on_click = 5;</code>
     */
    protected $on_click = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *           The text that displays in the grid header.
     *     @type array<\Google\Apps\Card\V1\Grid\GridItem>|\Google\Protobuf\Internal\RepeatedField $items
     *           The items to display in the grid.
     *     @type \Google\Apps\Card\V1\BorderStyle $border_style
     *           The border style to apply to each grid item.
     *     @type int $column_count
     *           The number of columns to display in the grid. A default value
     *           is used if this field isn't specified, and that default value is
     *           different depending on where the grid is shown (dialog versus companion).
     *     @type \Google\Apps\Card\V1\OnClick $on_click
     *           This callback is reused by each individual grid item, but with the
     *           item's identifier and index in the items list added to the callback's
     *           parameters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Card\V1\Card::initOnce();
        parent::__construct($data);
    }

    /**
     * The text that displays in the grid header.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * The text that displays in the grid header.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * The items to display in the grid.
     *
     * Generated from protobuf field <code>repeated .google.apps.card.v1.Grid.GridItem items = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * The items to display in the grid.
     *
     * Generated from protobuf field <code>repeated .google.apps.card.v1.Grid.GridItem items = 2;</code>
     * @param array<\Google\Apps\Card\V1\Grid\GridItem>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Apps\Card\V1\Grid\GridItem::class);
        $this->items = $arr;

        return $this;
    }

    /**
     * The border style to apply to each grid item.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.BorderStyle border_style = 3;</code>
     * @return \Google\Apps\Card\V1\BorderStyle|null
     */
    public function getBorderStyle()
    {
        return $this->border_style;
    }

    public function hasBorderStyle()
    {
        return isset($this->border_style);
    }

    public function clearBorderStyle()
    {
        unset($this->border_style);
    }

    /**
     * The border style to apply to each grid item.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.BorderStyle border_style = 3;</code>
     * @param \Google\Apps\Card\V1\BorderStyle $var
     * @return $this
     */
    public function setBorderStyle($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\BorderStyle::class);
        $this->border_style = $var;

        return $this;
    }

    /**
     * The number of columns to display in the grid. A default value
     * is used if this field isn't specified, and that default value is
     * different depending on where the grid is shown (dialog versus companion).
     *
     * Generated from protobuf field <code>int32 column_count = 4;</code>
     * @return int
     */
    public function getColumnCount()
    {
        return $this->column_count;
    }

    /**
     * The number of columns to display in the grid. A default value
     * is used if this field isn't specified, and that default value is
     * different depending on where the grid is shown (dialog versus companion).
     *
     * Generated from protobuf field <code>int32 column_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setColumnCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->column_count = $var;

        return $this;
    }

    /**
     * This callback is reused by each individual grid item, but with the
     * item's identifier and index in the items list added to the callback's
     * parameters.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.OnClick on_click = 5;</code>
     * @return \Google\Apps\Card\V1\OnClick|null
     */
    public function getOnClick()
    {
        return $this->on_click;
    }

    public function hasOnClick()
    {
        return isset($this->on_click);
    }

    public function clearOnClick()
    {
        unset($this->on_click);
    }

    /**
     * This callback is reused by each individual grid item, but with the
     * item's identifier and index in the items list added to the callback's
     * parameters.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.OnClick on_click = 5;</code>
     * @param \Google\Apps\Card\V1\OnClick $var
     * @return $this
     */
    public function setOnClick($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\OnClick::class);
        $this->on_click = $var;

        return $this;
    }

}

