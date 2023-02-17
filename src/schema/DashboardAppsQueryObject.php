<?php

namespace GraphQL\SchemaObject;

class DashboardAppsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DashboardApps";

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
