<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: message.proto

namespace Proto\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>Proto.Message.StatusResponse</code>
 */
class StatusResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.Proto.Message.ResponseHeader header = 1;</code>
     */
    private $header = null;

    public function __construct() {
        \GPBMetadata\Message::initOnce();
        parent::__construct();
    }

    /**
     * <code>.Proto.Message.ResponseHeader header = 1;</code>
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * <code>.Proto.Message.ResponseHeader header = 1;</code>
     */
    public function setHeader(&$var)
    {
        GPBUtil::checkMessage($var, \Proto\Message\ResponseHeader::class);
        $this->header = $var;
    }

}
