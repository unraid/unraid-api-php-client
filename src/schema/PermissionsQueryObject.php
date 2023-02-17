<?php

namespace GraphQL\SchemaObject;

class PermissionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "Permissions";

    public function selectScopes()
    {
        $this->selectField("scopes");

        return $this;
    }

    public function selectGrants()
    {
        $this->selectField("grants");

        return $this;
    }
}
