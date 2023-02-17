<?php

namespace GraphQL\SchemaObject;

class GpuQueryObject extends QueryObject
{
    const OBJECT_NAME = "Gpu";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectTypeid()
    {
        $this->selectField("typeid");

        return $this;
    }

    public function selectVendorname()
    {
        $this->selectField("vendorname");

        return $this;
    }

    public function selectProductid()
    {
        $this->selectField("productid");

        return $this;
    }

    public function selectBlacklisted()
    {
        $this->selectField("blacklisted");

        return $this;
    }

    public function selectClass()
    {
        $this->selectField("class");

        return $this;
    }
}
