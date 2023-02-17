<?php

namespace GraphQL\SchemaObject;

class ArrayQueryObject extends QueryObject
{
    const OBJECT_NAME = "Array";

    public function selectPreviousState()
    {
        $this->selectField("previousState");

        return $this;
    }

    public function selectPendingState()
    {
        $this->selectField("pendingState");

        return $this;
    }

    public function selectState()
    {
        $this->selectField("state");

        return $this;
    }

    public function selectCapacity(ArrayCapacityArgumentsObject $argsObject = null)
    {
        $object = new ArrayCapacityQueryObject("capacity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBoot(ArrayBootArgumentsObject $argsObject = null)
    {
        $object = new ArrayDataDiskQueryObject("boot");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectParities(ArrayParitiesArgumentsObject $argsObject = null)
    {
        $object = new ArrayDataDiskQueryObject("parities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDisks(ArrayDisksArgumentsObject $argsObject = null)
    {
        $object = new ArrayDataDiskQueryObject("disks");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCaches(ArrayCachesArgumentsObject $argsObject = null)
    {
        $object = new ArrayDataDiskQueryObject("caches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
