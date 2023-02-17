<?php

namespace GraphQL\SchemaObject;

class ApiKeyQueryObject extends QueryObject
{
    const OBJECT_NAME = "ApiKey";

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectKey()
    {
        $this->selectField("key");

        return $this;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectScopes()
    {
        $this->selectField("scopes");

        return $this;
    }

    public function selectExpiresAt()
    {
        $this->selectField("expiresAt");

        return $this;
    }
}
