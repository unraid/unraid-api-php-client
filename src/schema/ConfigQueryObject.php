<?php

namespace GraphQL\SchemaObject;

class ConfigQueryObject extends QueryObject
{
    const OBJECT_NAME = "Config";

    public function selectValid()
    {
        $this->selectField("valid");

        return $this;
    }

    public function selectError()
    {
        $this->selectField("error");

        return $this;
    }
}
