<?php

namespace GraphQL\SchemaObject;

class TwoFactorRemoteQueryObject extends QueryObject
{
    const OBJECT_NAME = "TwoFactorRemote";

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }
}
