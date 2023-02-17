<?php

namespace GraphQL\SchemaObject;

class ApiKeyResponseQueryObject extends QueryObject
{
    const OBJECT_NAME = "ApiKeyResponse";

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
