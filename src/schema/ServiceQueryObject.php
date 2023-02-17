<?php

namespace GraphQL\SchemaObject;

class ServiceQueryObject extends QueryObject
{
    const OBJECT_NAME = "Service";

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

    public function selectUptime(ServiceUptimeArgumentsObject $argsObject = null)
    {
        $object = new UptimeQueryObject("uptime");
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
