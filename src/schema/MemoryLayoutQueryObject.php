<?php

namespace GraphQL\SchemaObject;

class MemoryLayoutQueryObject extends QueryObject
{
    const OBJECT_NAME = "MemoryLayout";

    public function selectSize()
    {
        $this->selectField("size");

        return $this;
    }

    public function selectBank()
    {
        $this->selectField("bank");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectClockSpeed()
    {
        $this->selectField("clockSpeed");

        return $this;
    }

    public function selectFormFactor()
    {
        $this->selectField("formFactor");

        return $this;
    }

    public function selectManufacturer()
    {
        $this->selectField("manufacturer");

        return $this;
    }

    public function selectPartNum()
    {
        $this->selectField("partNum");

        return $this;
    }

    public function selectSerialNum()
    {
        $this->selectField("serialNum");

        return $this;
    }

    public function selectVoltageConfigured()
    {
        $this->selectField("voltageConfigured");

        return $this;
    }

    public function selectVoltageMin()
    {
        $this->selectField("voltageMin");

        return $this;
    }

    public function selectVoltageMax()
    {
        $this->selectField("voltageMax");

        return $this;
    }
}
