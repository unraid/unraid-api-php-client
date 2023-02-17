<?php

namespace GraphQL\SchemaObject;

class ContainerPortQueryObject extends QueryObject
{
    const OBJECT_NAME = "ContainerPort";

    public function selectIp()
    {
        $this->selectField("ip");

        return $this;
    }

    public function selectPrivatePort()
    {
        $this->selectField("privatePort");

        return $this;
    }

    public function selectPublicPort()
    {
        $this->selectField("publicPort");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }
}
