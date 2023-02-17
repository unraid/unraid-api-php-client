<?php

namespace GraphQL\SchemaObject;

class DashboardServiceQueryObject extends QueryObject
{
    const OBJECT_NAME = "DashboardService";

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectOnline()
    {
        $this->selectField("online");

        return $this;
    }

    public function selectUptime(DashboardServiceUptimeArgumentsObject $argsObject = null)
    {
        $object = new DashboardServiceUptimeQueryObject("uptime");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVersion()
    {
        $this->selectField("version");

        return $this;
    }
}
