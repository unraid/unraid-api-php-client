<?php

namespace GraphQL\SchemaObject;

class ShareQueryObject extends QueryObject
{
    const OBJECT_NAME = "Share";

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectFree()
    {
        $this->selectField("free");

        return $this;
    }

    public function selectSize()
    {
        $this->selectField("size");

        return $this;
    }

    public function selectInclude()
    {
        $this->selectField("include");

        return $this;
    }

    public function selectExclude()
    {
        $this->selectField("exclude");

        return $this;
    }

    public function selectCache()
    {
        $this->selectField("cache");

        return $this;
    }

    public function selectNameOrig()
    {
        $this->selectField("nameOrig");

        return $this;
    }

    public function selectComment()
    {
        $this->selectField("comment");

        return $this;
    }

    public function selectAllocator()
    {
        $this->selectField("allocator");

        return $this;
    }

    public function selectSplitLevel()
    {
        $this->selectField("splitLevel");

        return $this;
    }

    public function selectFloor()
    {
        $this->selectField("floor");

        return $this;
    }

    public function selectCow()
    {
        $this->selectField("cow");

        return $this;
    }

    public function selectColor()
    {
        $this->selectField("color");

        return $this;
    }

    public function selectLuksStatus()
    {
        $this->selectField("luksStatus");

        return $this;
    }
}
