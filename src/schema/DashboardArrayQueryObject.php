<?php

namespace GraphQL\SchemaObject;

class DashboardArrayQueryObject extends QueryObject
{
    const OBJECT_NAME = "DashboardArray";

    public function selectState()
    {
        $this->selectField("state");

        return $this;
    }

    public function selectCapacity(DashboardArrayCapacityArgumentsObject $argsObject = null)
    {
        $object = new ArrayCapacityQueryObject("capacity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
