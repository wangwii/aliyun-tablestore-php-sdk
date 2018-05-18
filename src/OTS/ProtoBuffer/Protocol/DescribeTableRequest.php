<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: table_store.proto

namespace Aliyun\OTS\ProtoBuffer\Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *&#47;&#42; #############################################  DescribeTable  ############################################# *&#47;
 *
 * Generated from protobuf message <code>aliyun.OTS.ProtoBuffer.Protocol.DescribeTableRequest</code>
 */
class DescribeTableRequest extends \Aliyun\OTS\ProtoBuffer\Protocol\Message
{
    /**
     * Generated from protobuf field <code>required string table_name = 1;</code>
     */
    private $table_name = '';
    private $has_table_name = false;

    public function __construct() {
        \GPBMetadata\TableStore::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>required string table_name = 1;</code>
     * @return string
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * Generated from protobuf field <code>required string table_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTableName($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_name = $var;
        $this->has_table_name = true;

        return $this;
    }

    public function hasTableName()
    {
        return $this->has_table_name;
    }

}

