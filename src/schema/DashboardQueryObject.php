<?php

namespace GraphQL\SchemaObject;

class DashboardQueryObject extends QueryObject
{
    const OBJECT_NAME = "Dashboard";

    public function selectApps(DashboardAppsArgumentsObject $argsObject = null)
    {
        $object = new DashboardAppsQueryObject("apps");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVersions(DashboardVersionsArgumentsObject $argsObject = null)
    {
        $object = new DashboardVersionsQueryObject("versions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOs(DashboardOsArgumentsObject $argsObject = null)
    {
        $object = new DashboardOsQueryObject("os");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVms(DashboardVmsArgumentsObject $argsObject = null)
    {
        $object = new DashboardVmsQueryObject("vms");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectArray(DashboardArrayArgumentsObject $argsObject = null)
    {
        $object = new DashboardArrayQueryObject("array");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectServices(DashboardServicesArgumentsObject $argsObject = null)
    {
        $object = new DashboardServiceQueryObject("services");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDisplay(DashboardDisplayArgumentsObject $argsObject = null)
    {
        $object = new DashboardDisplayQueryObject("display");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectConfig(DashboardConfigArgumentsObject $argsObject = null)
    {
        $object = new DashboardConfigQueryObject("config");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVars(DashboardVarsArgumentsObject $argsObject = null)
    {
        $object = new DashboardVarsQueryObject("vars");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTwoFactor(DashboardTwoFactorArgumentsObject $argsObject = null)
    {
        $object = new DashboardTwoFactorQueryObject("twoFactor");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
