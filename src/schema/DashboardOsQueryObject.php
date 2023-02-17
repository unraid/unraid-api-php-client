<?php

namespace GraphQL\SchemaObject;

class DashboardOsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DashboardOs";

    public function selectHostname()
    {
        $this->selectField("hostname");

        return $this;
    }

    public function selectUptime()
    {
        $this->selectField("uptime");

        return $this;
    }
}
