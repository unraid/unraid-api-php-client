<?php

namespace GraphQL\SchemaObject;

class TwoFactorLocalQueryObject extends QueryObject
{
    const OBJECT_NAME = "TwoFactorLocal";

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }
}
