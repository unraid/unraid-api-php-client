<?php

namespace GraphQL\SchemaObject;

class ArrayDataDiskQueryObject extends QueryObject
{
    const OBJECT_NAME = "ArrayDataDisk";

    public function selectSlot()
    {
        $this->selectField("slot");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectDevice()
    {
        $this->selectField("device");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectSize()
    {
        $this->selectField("size");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectRotational()
    {
        $this->selectField("rotational");

        return $this;
    }

    public function selectFormat()
    {
        $this->selectField("format");

        return $this;
    }

    public function selectTemp()
    {
        $this->selectField("temp");

        return $this;
    }

    public function selectNumReads()
    {
        $this->selectField("numReads");

        return $this;
    }

    public function selectNumWrites()
    {
        $this->selectField("numWrites");

        return $this;
    }

    public function selectNumErrors()
    {
        $this->selectField("numErrors");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectColor()
    {
        $this->selectField("color");

        return $this;
    }

    public function selectFsStatus()
    {
        $this->selectField("fsStatus");

        return $this;
    }

    public function selectLuksState()
    {
        $this->selectField("luksState");

        return $this;
    }

    public function selectComment()
    {
        $this->selectField("comment");

        return $this;
    }

    public function selectExportable()
    {
        $this->selectField("exportable");

        return $this;
    }

    public function selectFsType()
    {
        $this->selectField("fsType");

        return $this;
    }

    public function selectFsColor()
    {
        $this->selectField("fsColor");

        return $this;
    }

    public function selectFsSize()
    {
        $this->selectField("fsSize");

        return $this;
    }

    public function selectFsFree()
    {
        $this->selectField("fsFree");

        return $this;
    }

    public function selectSpindownDelay()
    {
        $this->selectField("spindownDelay");

        return $this;
    }

    public function selectSpinupGroup()
    {
        $this->selectField("spinupGroup");

        return $this;
    }

    public function selectDeviceSb()
    {
        $this->selectField("deviceSb");

        return $this;
    }

    public function selectIdSb()
    {
        $this->selectField("idSb");

        return $this;
    }

    public function selectSizeSb()
    {
        $this->selectField("sizeSb");

        return $this;
    }
}
