<?php

namespace GraphQL\SchemaObject;

class CloudResponseQueryObject extends QueryObject
{
    const OBJECT_NAME = "CloudResponse";

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectIp()
    {
        $this->selectField("ip");

        return $this;
    }

    public function selectError()
    {
        $this->selectField("error");

        return $this;
    }
}
