<?php

namespace GraphQL\SchemaObject;

class DiskPartitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiskPartition";

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectFsType()
    {
        $this->selectField("fsType");

        return $this;
    }

    public function selectSize()
    {
        $this->selectField("size");

        return $this;
    }
}
