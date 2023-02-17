<?php

namespace GraphQL\SchemaObject;

class UserQueryObject extends QueryObject
{
    const OBJECT_NAME = "User";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectRole()
    {
        $this->selectField("role");

        return $this;
    }

    public function selectPassword()
    {
        $this->selectField("password");

        return $this;
    }
}
