<?php

namespace GraphQL\SchemaObject;

class DisplayQueryObject extends QueryObject
{
    const OBJECT_NAME = "Display";

    public function selectCase(DisplayCaseArgumentsObject $argsObject = null)
    {
        $object = new CaseQueryObject("case");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDate()
    {
        $this->selectField("date");

        return $this;
    }

    public function selectNumber()
    {
        $this->selectField("number");

        return $this;
    }

    public function selectScale()
    {
        $this->selectField("scale");

        return $this;
    }

    public function selectTabs()
    {
        $this->selectField("tabs");

        return $this;
    }

    public function selectUsers()
    {
        $this->selectField("users");

        return $this;
    }

    public function selectResize()
    {
        $this->selectField("resize");

        return $this;
    }

    public function selectWwn()
    {
        $this->selectField("wwn");

        return $this;
    }

    public function selectTotal()
    {
        $this->selectField("total");

        return $this;
    }

    public function selectUsage()
    {
        $this->selectField("usage");

        return $this;
    }

    public function selectBanner()
    {
        $this->selectField("banner");

        return $this;
    }

    public function selectDashapps()
    {
        $this->selectField("dashapps");

        return $this;
    }

    public function selectTheme()
    {
        $this->selectField("theme");

        return $this;
    }

    public function selectText()
    {
        $this->selectField("text");

        return $this;
    }

    public function selectUnit()
    {
        $this->selectField("unit");

        return $this;
    }

    public function selectWarning()
    {
        $this->selectField("warning");

        return $this;
    }

    public function selectCritical()
    {
        $this->selectField("critical");

        return $this;
    }

    public function selectHot()
    {
        $this->selectField("hot");

        return $this;
    }

    public function selectMax()
    {
        $this->selectField("max");

        return $this;
    }

    public function selectLocale()
    {
        $this->selectField("locale");

        return $this;
    }
}
