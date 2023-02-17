<?php

namespace GraphQL\SchemaObject;

class OwnerQueryObject extends QueryObject
{
    const OBJECT_NAME = "Owner";

    public function selectUsername()
    {
        $this->selectField("username");

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }

    public function selectAvatar()
    {
        $this->selectField("avatar");

        return $this;
    }
}
