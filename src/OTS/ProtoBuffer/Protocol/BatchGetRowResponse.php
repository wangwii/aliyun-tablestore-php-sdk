<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: table_store.proto

namespace Aliyun\OTS\ProtoBuffer\Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>aliyun.OTS.ProtoBuffer.Protocol.BatchGetRowResponse</code>
 */
class BatchGetRowResponse extends \Aliyun\OTS\ProtoBuffer\Protocol\Message
{
    /**
     * Generated from protobuf field <code>repeated .aliyun.OTS.ProtoBuffer.Protocol.TableInBatchGetRowResponse tables = 1;</code>
     */
    private $tables;
    private $has_tables = false;

    public function __construct() {
        \GPBMetadata\TableStore::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .aliyun.OTS.ProtoBuffer.Protocol.TableInBatchGetRowResponse tables = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTables()
    {
        return $this->tables;
    }

    /**
     * Generated from protobuf field <code>repeated .aliyun.OTS.ProtoBuffer.Protocol.TableInBatchGetRowResponse tables = 1;</code>
     * @param \Aliyun\OTS\ProtoBuffer\Protocol\TableInBatchGetRowResponse[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTables($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Aliyun\OTS\ProtoBuffer\Protocol\TableInBatchGetRowResponse::class);
        $this->tables = $arr;
        $this->has_tables = true;

        return $this;
    }

    public function hasTables()
    {
        return $this->has_tables;
    }

}

