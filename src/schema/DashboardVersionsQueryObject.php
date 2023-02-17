<?php

namespace GraphQL\SchemaObject;

class DashboardVersionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DashboardVersions";

    public function selectUnraid()
    {
        $this->selectField("unraid");

        return $this;
    }
}
