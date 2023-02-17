<?php

namespace GraphQL\SchemaObject;

class MeQueryObject extends QueryObject
{
    const OBJECT_NAME = "Me";

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

    public function selectPermissions()
    {
        $this->selectField("permissions");

        return $this;
    }
}
