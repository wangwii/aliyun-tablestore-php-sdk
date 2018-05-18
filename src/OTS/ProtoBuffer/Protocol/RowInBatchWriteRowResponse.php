<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: table_store.proto

namespace Aliyun\OTS\ProtoBuffer\Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>aliyun.OTS.ProtoBuffer.Protocol.RowInBatchWriteRowResponse</code>
 */
class RowInBatchWriteRowResponse extends \Aliyun\OTS\ProtoBuffer\Protocol\Message
{
    /**
     * Generated from protobuf field <code>required bool is_ok = 1;</code>
     */
    private $is_ok = false;
    private $has_is_ok = false;
    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.Error error = 2;</code>
     */
    private $error = null;
    private $has_error = false;
    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.ConsumedCapacity consumed = 3;</code>
     */
    private $consumed = null;
    private $has_consumed = false;
    /**
     * encoded as InplaceRowChangeSet
     *
     * Generated from protobuf field <code>optional bytes row = 4;</code>
     */
    private $row = '';
    private $has_row = false;

    public function __construct() {
        \GPBMetadata\TableStore::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>required bool is_ok = 1;</code>
     * @return bool
     */
    public function getIsOk()
    {
        return $this->is_ok;
    }

    /**
     * Generated from protobuf field <code>required bool is_ok = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsOk($var)
    {
        GPBUtil::checkBool($var);
        $this->is_ok = $var;
        $this->has_is_ok = true;

        return $this;
    }

    public function hasIsOk()
    {
        return $this->has_is_ok;
    }

    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.Error error = 2;</code>
     * @return \Aliyun\OTS\ProtoBuffer\Protocol\Error
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.Error error = 2;</code>
     * @param \Aliyun\OTS\ProtoBuffer\Protocol\Error $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Aliyun\OTS\ProtoBuffer\Protocol\Error::class);
        $this->error = $var;
        $this->has_error = true;

        return $this;
    }

    public function hasError()
    {
        return $this->has_error;
    }

    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.ConsumedCapacity consumed = 3;</code>
     * @return \Aliyun\OTS\ProtoBuffer\Protocol\ConsumedCapacity
     */
    public function getConsumed()
    {
        return $this->consumed;
    }

    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.ConsumedCapacity consumed = 3;</code>
     * @param \Aliyun\OTS\ProtoBuffer\Protocol\ConsumedCapacity $var
     * @return $this
     */
    public function setConsumed($var)
    {
        GPBUtil::checkMessage($var, \Aliyun\OTS\ProtoBuffer\Protocol\ConsumedCapacity::class);
        $this->consumed = $var;
        $this->has_consumed = true;

        return $this;
    }

    public function hasConsumed()
    {
        return $this->has_consumed;
    }

    /**
     * encoded as InplaceRowChangeSet
     *
     * Generated from protobuf field <code>optional bytes row = 4;</code>
     * @return string
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * encoded as InplaceRowChangeSet
     *
     * Generated from protobuf field <code>optional bytes row = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRow($var)
    {
        GPBUtil::checkString($var, False);
        $this->row = $var;
        $this->has_row = true;

        return $this;
    }

    public function hasRow()
    {
        return $this->has_row;
    }

}

