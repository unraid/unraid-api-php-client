<?php

namespace GraphQL\SchemaObject;

class InfoMemoryQueryObject extends QueryObject
{
    const OBJECT_NAME = "InfoMemory";

    public function selectMax()
    {
        $this->selectField("max");

        return $this;
    }

    public function selectTotal()
    {
        $this->selectField("total");

        return $this;
    }

    public function selectFree()
    {
        $this->selectField("free");

        return $this;
    }

    public function selectUsed()
    {
        $this->selectField("used");

        return $this;
    }

    public function selectActive()
    {
        $this->selectField("active");

        return $this;
    }

    public function selectAvailable()
    {
        $this->selectField("available");

        return $this;
    }

    public function selectBuffcache()
    {
        $this->selectField("buffcache");

        return $this;
    }

    public function selectSwaptotal()
    {
        $this->selectField("swaptotal");

        return $this;
    }

    public function selectSwapused()
    {
        $this->selectField("swapused");

        return $this;
    }

    public function selectSwapfree()
    {
        $this->selectField("swapfree");

        return $this;
    }

    public function selectLayout(InfoMemoryLayoutArgumentsObject $argsObject = null)
    {
        $object = new MemoryLayoutQueryObject("layout");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
