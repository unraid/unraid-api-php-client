<?php

namespace GraphQL\SchemaObject;

class DashboardTwoFactorLocalQueryObject extends QueryObject
{
    const OBJECT_NAME = "DashboardTwoFactorLocal";

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }
}
