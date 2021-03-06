<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: table_store.proto

namespace Aliyun\OTS\ProtoBuffer\Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * 当前只返回一个简单的名称列表，需要讨论是否有业务场景需要获取除了表名之外的其他信息。
 * 其他信息可以包含预留吞吐量以及表的状态，这个信息只能是一个粗略的信息，表的详细信息还是需要通过DescribeTable来获取。
 *
 * Generated from protobuf message <code>aliyun.OTS.ProtoBuffer.Protocol.ListTableResponse</code>
 */
class ListTableResponse extends \Aliyun\OTS\ProtoBuffer\Protocol\Message
{
    /**
     * Generated from protobuf field <code>repeated string table_names = 1;</code>
     */
    private $table_names;
    private $has_table_names = false;

    public function __construct() {
        \GPBMetadata\TableStore::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated string table_names = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTableNames()
    {
        return $this->table_names;
    }

    /**
     * Generated from protobuf field <code>repeated string table_names = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTableNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->table_names = $arr;
        $this->has_table_names = true;

        return $this;
    }

    public function hasTableNames()
    {
        return $this->has_table_names;
    }

}

