<?php

namespace GraphQL\SchemaObject;

class DashboardTwoFactorRemoteQueryObject extends QueryObject
{
    const OBJECT_NAME = "DashboardTwoFactorRemote";

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }
}
