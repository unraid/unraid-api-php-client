<?php

namespace GraphQL\SchemaObject;

class RegistrationQueryObject extends QueryObject
{
    const OBJECT_NAME = "Registration";

    public function selectGuid()
    {
        $this->selectField("guid");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectKeyFile(RegistrationKeyFileArgumentsObject $argsObject = null)
    {
        $object = new KeyFileQueryObject("keyFile");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectState()
    {
        $this->selectField("state");

        return $this;
    }

    public function selectExpiration()
    {
        $this->selectField("expiration");

        return $this;
    }
}
