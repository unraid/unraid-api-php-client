<?php

namespace GraphQL\SchemaObject;

class MountQueryObject extends QueryObject
{
    const OBJECT_NAME = "Mount";

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectDirectory()
    {
        $this->selectField("directory");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectPermissions()
    {
        $this->selectField("permissions");

        return $this;
    }
}
