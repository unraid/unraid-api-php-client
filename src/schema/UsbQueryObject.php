<?php

namespace GraphQL\SchemaObject;

class UsbQueryObject extends QueryObject
{
    const OBJECT_NAME = "Usb";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
