<?php

namespace GraphQL\SchemaObject;

class TwoFactorWithTokenQueryObject extends QueryObject
{
    const OBJECT_NAME = "TwoFactorWithToken";

    public function selectToken()
    {
        $this->selectField("token");

        return $this;
    }

    public function selectRemote(TwoFactorWithTokenRemoteArgumentsObject $argsObject = null)
    {
        $object = new TwoFactorRemoteQueryObject("remote");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocal(TwoFactorWithTokenLocalArgumentsObject $argsObject = null)
    {
        $object = new TwoFactorLocalQueryObject("local");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
