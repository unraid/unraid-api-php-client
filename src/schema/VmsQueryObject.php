<?php

namespace GraphQL\SchemaObject;

class VmsQueryObject extends QueryObject
{
    const OBJECT_NAME = "Vms";

    public function selectDomain(VmsDomainArgumentsObject $argsObject = null)
    {
        $object = new VmDomainQueryObject("domain");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
