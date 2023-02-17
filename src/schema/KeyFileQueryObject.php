<?php

namespace GraphQL\SchemaObject;

class KeyFileQueryObject extends QueryObject
{
    const OBJECT_NAME = "KeyFile";

    public function selectLocation()
    {
        $this->selectField("location");

        return $this;
    }

    public function selectContents()
    {
        $this->selectField("contents");

        return $this;
    }
}
