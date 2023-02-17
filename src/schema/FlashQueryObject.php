<?php

namespace GraphQL\SchemaObject;

class FlashQueryObject extends QueryObject
{
    const OBJECT_NAME = "Flash";

    public function selectGuid()
    {
        $this->selectField("guid");

        return $this;
    }

    public function selectVendor()
    {
        $this->selectField("vendor");

        return $this;
    }

    public function selectProduct()
    {
        $this->selectField("product");

        return $this;
    }
}
