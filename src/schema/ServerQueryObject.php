<?php

namespace GraphQL\SchemaObject;

class ServerQueryObject extends QueryObject
{
    const OBJECT_NAME = "Server";

    public function selectOwner(ServerOwnerArgumentsObject $argsObject = null)
    {
        $object = new OwnerQueryObject("owner");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGuid()
    {
        $this->selectField("guid");

        return $this;
    }

    public function selectApikey()
    {
        $this->selectField("apikey");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectWanip()
    {
        $this->selectField("wanip");

        return $this;
    }

    public function selectLanip()
    {
        $this->selectField("lanip");

        return $this;
    }

    public function selectLocalurl()
    {
        $this->selectField("localurl");

        return $this;
    }

    public function selectRemoteurl()
    {
        $this->selectField("remoteurl");

        return $this;
    }
}
