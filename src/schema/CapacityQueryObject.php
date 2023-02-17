<?php

namespace GraphQL\SchemaObject;

class CapacityQueryObject extends QueryObject
{
    const OBJECT_NAME = "Capacity";

    public function selectFree()
    {
        $this->selectField("free");

        return $this;
    }

    public function selectUsed()
    {
        $this->selectField("used");

        return $this;
    }

    public function selectTotal()
    {
        $this->selectField("total");

        return $this;
    }
}
