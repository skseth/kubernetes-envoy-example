<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/item/item.proto

namespace Item;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>item.GetItemRequest</code>
 */
class GetItemRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string id = 1;</code>
     */
    private $id = '';

    public function __construct() {
        \GPBMetadata\Proto\Item\Item::initOnce();
        parent::__construct();
    }

    /**
     * <code>string id = 1;</code>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <code>string id = 1;</code>
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;
    }

}

