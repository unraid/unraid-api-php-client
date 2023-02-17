<?php

namespace GraphQL\SchemaObject;

class ArrayCapacityQueryObject extends QueryObject
{
    const OBJECT_NAME = "ArrayCapacity";

    public function selectBytes(ArrayCapacityBytesArgumentsObject $argsObject = null)
    {
        $object = new CapacityQueryObject("bytes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDisks(ArrayCapacityDisksArgumentsObject $argsObject = null)
    {
        $object = new CapacityQueryObject("disks");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
