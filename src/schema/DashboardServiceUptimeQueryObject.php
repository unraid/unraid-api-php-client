<?php

namespace GraphQL\SchemaObject;

class DashboardServiceUptimeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DashboardServiceUptime";

    public function selectTimestamp()
    {
        $this->selectField("timestamp");

        return $this;
    }
}
