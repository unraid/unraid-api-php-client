<?php

namespace GraphQL\SchemaObject;

class DashboardVarsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DashboardVars";

    public function selectRegState()
    {
        $this->selectField("regState");

        return $this;
    }

    public function selectRegTy()
    {
        $this->selectField("regTy");

        return $this;
    }

    public function selectFlashGuid()
    {
        $this->selectField("flashGuid");

        return $this;
    }
}
