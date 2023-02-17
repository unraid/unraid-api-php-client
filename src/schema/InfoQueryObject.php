<?php

namespace GraphQL\SchemaObject;

class InfoQueryObject extends QueryObject
{
    const OBJECT_NAME = "Info";

    public function selectApps(InfoAppsArgumentsObject $argsObject = null)
    {
        $object = new InfoAppsQueryObject("apps");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBaseboard(InfoBaseboardArgumentsObject $argsObject = null)
    {
        $object = new BaseboardQueryObject("baseboard");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCpu(InfoCpuArgumentsObject $argsObject = null)
    {
        $object = new InfoCpuQueryObject("cpu");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDevices(InfoDevicesArgumentsObject $argsObject = null)
    {
        $object = new DevicesQueryObject("devices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDisplay(InfoDisplayArgumentsObject $argsObject = null)
    {
        $object = new DisplayQueryObject("display");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMachineId()
    {
        $this->selectField("machineId");

        return $this;
    }

    public function selectMemory(InfoMemoryArgumentsObject $argsObject = null)
    {
        $object = new InfoMemoryQueryObject("memory");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOs(InfoOsArgumentsObject $argsObject = null)
    {
        $object = new OsQueryObject("os");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSystem(InfoSystemArgumentsObject $argsObject = null)
    {
        $object = new SystemQueryObject("system");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVersions(InfoVersionsArgumentsObject $argsObject = null)
    {
        $object = new VersionsQueryObject("versions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVms(InfoVmsArgumentsObject $argsObject = null)
    {
        $object = new InfoVMsQueryObject("vms");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
