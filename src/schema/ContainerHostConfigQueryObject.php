<?php

namespace GraphQL\SchemaObject;

class ContainerHostConfigQueryObject extends QueryObject
{
    const OBJECT_NAME = "ContainerHostConfig";

    public function selectNetworkMode()
    {
        $this->selectField("networkMode");

        return $this;
    }
}
