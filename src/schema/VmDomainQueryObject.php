<?php

namespace GraphQL\SchemaObject;

class VmDomainQueryObject extends QueryObject
{
    const OBJECT_NAME = "VmDomain";

    public function selectUuid()
    {
        $this->selectField("uuid");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectState()
    {
        $this->selectField("state");

        return $this;
    }
}
