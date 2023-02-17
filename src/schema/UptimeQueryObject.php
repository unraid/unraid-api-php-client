<?php

namespace GraphQL\SchemaObject;

class UptimeQueryObject extends QueryObject
{
    const OBJECT_NAME = "Uptime";

    public function selectTimestamp()
    {
        $this->selectField("timestamp");

        return $this;
    }

    public function selectSeconds()
    {
        $this->selectField("seconds");

        return $this;
    }
}
