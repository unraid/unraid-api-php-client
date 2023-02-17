<?php

namespace GraphQL\SchemaObject;

class DashboardTwoFactorQueryObject extends QueryObject
{
    const OBJECT_NAME = "DashboardTwoFactor";

    public function selectRemote(DashboardTwoFactorRemoteArgumentsObject $argsObject = null)
    {
        $object = new DashboardTwoFactorRemoteQueryObject("remote");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocal(DashboardTwoFactorLocalArgumentsObject $argsObject = null)
    {
        $object = new DashboardTwoFactorLocalQueryObject("local");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
