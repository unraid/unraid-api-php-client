<?php

namespace GraphQL\SchemaObject;

class InfoVMsQueryObject extends QueryObject
{
    const OBJECT_NAME = "InfoVMs";

    public function selectInstalled()
    {
        $this->selectField("installed");

        return $this;
    }

    public function selectStarted()
    {
        $this->selectField("started");

        return $this;
    }
}
