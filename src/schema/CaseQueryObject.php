<?php

namespace GraphQL\SchemaObject;

class CaseQueryObject extends QueryObject
{
    const OBJECT_NAME = "Case";

    public function selectIcon()
    {
        $this->selectField("icon");

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }

    public function selectError()
    {
        $this->selectField("error");

        return $this;
    }

    public function selectBase64()
    {
        $this->selectField("base64");

        return $this;
    }
}
