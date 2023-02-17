<?php

namespace GraphQL\SchemaObject;

class SystemQueryObject extends QueryObject
{
    const OBJECT_NAME = "System";

    public function selectManufacturer()
    {
        $this->selectField("manufacturer");

        return $this;
    }

    public function selectModel()
    {
        $this->selectField("model");

        return $this;
    }

    public function selectVersion()
    {
        $this->selectField("version");

        return $this;
    }

    public function selectSerial()
    {
        $this->selectField("serial");

        return $this;
    }

    public function selectUuid()
    {
        $this->selectField("uuid");

        return $this;
    }

    public function selectSku()
    {
        $this->selectField("sku");

        return $this;
    }
}
