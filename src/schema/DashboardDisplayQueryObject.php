<?php

namespace GraphQL\SchemaObject;

class DashboardDisplayQueryObject extends QueryObject
{
    const OBJECT_NAME = "DashboardDisplay";

    public function selectCase(DashboardDisplayCaseArgumentsObject $argsObject = null)
    {
        $object = new DashboardCaseQueryObject("case");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
