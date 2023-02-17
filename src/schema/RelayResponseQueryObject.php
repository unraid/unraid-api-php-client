<?php

namespace GraphQL\SchemaObject;

class RelayResponseQueryObject extends QueryObject
{
    const OBJECT_NAME = "RelayResponse";

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectTimeout()
    {
        $this->selectField("timeout");

        return $this;
    }

    public function selectError()
    {
        $this->selectField("error");

        return $this;
    }
}
