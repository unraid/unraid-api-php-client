<?php

namespace GraphQL\SchemaObject;

class InfoCpuQueryObject extends QueryObject
{
    const OBJECT_NAME = "InfoCpu";

    public function selectManufacturer()
    {
        $this->selectField("manufacturer");

        return $this;
    }

    public function selectBrand()
    {
        $this->selectField("brand");

        return $this;
    }

    public function selectVendor()
    {
        $this->selectField("vendor");

        return $this;
    }

    public function selectFamily()
    {
        $this->selectField("family");

        return $this;
    }

    public function selectModel()
    {
        $this->selectField("model");

        return $this;
    }

    public function selectStepping()
    {
        $this->selectField("stepping");

        return $this;
    }

    public function selectRevision()
    {
        $this->selectField("revision");

        return $this;
    }

    public function selectVoltage()
    {
        $this->selectField("voltage");

        return $this;
    }

    public function selectSpeed()
    {
        $this->selectField("speed");

        return $this;
    }

    public function selectSpeedmin()
    {
        $this->selectField("speedmin");

        return $this;
    }

    public function selectSpeedmax()
    {
        $this->selectField("speedmax");

        return $this;
    }

    public function selectThreads()
    {
        $this->selectField("threads");

        return $this;
    }

    public function selectCores()
    {
        $this->selectField("cores");

        return $this;
    }

    public function selectProcessors()
    {
        $this->selectField("processors");

        return $this;
    }

    public function selectSocket()
    {
        $this->selectField("socket");

        return $this;
    }

    public function selectCache()
    {
        $this->selectField("cache");

        return $this;
    }

    public function selectFlags()
    {
        $this->selectField("flags");

        return $this;
    }
}
