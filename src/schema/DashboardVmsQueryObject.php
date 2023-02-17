<?php

namespace GraphQL\SchemaObject;

class DashboardVmsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DashboardVms";

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
