<?php

namespace GraphQL\SchemaObject;

class DeviceQueryObject extends QueryObject
{
    const OBJECT_NAME = "Device";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectTag()
    {
        $this->selectField("tag");

        return $this;
    }

    public function selectDevice()
    {
        $this->selectField("device");

        return $this;
    }

    public function selectSectors()
    {
        $this->selectField("sectors");

        return $this;
    }

    public function selectSectorSize()
    {
        $this->selectField("sectorSize");

        return $this;
    }
}
