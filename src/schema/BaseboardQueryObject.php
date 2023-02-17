<?php

namespace GraphQL\SchemaObject;

class BaseboardQueryObject extends QueryObject
{
    const OBJECT_NAME = "Baseboard";

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

    public function selectAssetTag()
    {
        $this->selectField("assetTag");

        return $this;
    }
}
