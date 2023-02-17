<?php

namespace GraphQL\SchemaObject;

class WelcomeQueryObject extends QueryObject
{
    const OBJECT_NAME = "Welcome";

    public function selectMessage()
    {
        $this->selectField("message");

        return $this;
    }
}
