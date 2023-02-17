<?php

namespace GraphQL\SchemaObject;

class MinigraphqlResponseQueryObject extends QueryObject
{
    const OBJECT_NAME = "MinigraphqlResponse";

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectError()
    {
        $this->selectField("error");

        return $this;
    }
}
