<?php

namespace GraphQL\SchemaObject;

class DashboardConfigQueryObject extends QueryObject
{
    const OBJECT_NAME = "DashboardConfig";

    public function selectValid()
    {
        $this->selectField("valid");

        return $this;
    }

    public function selectError()
    {
        $this->selectField("error");

        return $this;
    }
}
