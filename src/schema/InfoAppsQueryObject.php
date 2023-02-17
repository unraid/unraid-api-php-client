<?php

namespace GraphQL\SchemaObject;

class InfoAppsQueryObject extends QueryObject
{
    const OBJECT_NAME = "InfoApps";

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
