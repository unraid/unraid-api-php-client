<?php

namespace GraphQL\SchemaObject;

class ParityCheckQueryObject extends QueryObject
{
    const OBJECT_NAME = "ParityCheck";

    public function selectDate()
    {
        $this->selectField("date");

        return $this;
    }

    public function selectDuration()
    {
        $this->selectField("duration");

        return $this;
    }

    public function selectSpeed()
    {
        $this->selectField("speed");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectErrors()
    {
        $this->selectField("errors");

        return $this;
    }
}
