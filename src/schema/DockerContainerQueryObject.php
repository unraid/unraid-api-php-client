<?php

namespace GraphQL\SchemaObject;

class DockerContainerQueryObject extends QueryObject
{
    const OBJECT_NAME = "DockerContainer";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectNames()
    {
        $this->selectField("names");

        return $this;
    }

    public function selectImage()
    {
        $this->selectField("image");

        return $this;
    }

    public function selectImageId()
    {
        $this->selectField("imageId");

        return $this;
    }

    public function selectCommand()
    {
        $this->selectField("command");

        return $this;
    }

    public function selectCreated()
    {
        $this->selectField("created");

        return $this;
    }

    public function selectPorts(DockerContainerPortsArgumentsObject $argsObject = null)
    {
        $object = new ContainerPortQueryObject("ports");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSizeRootFs()
    {
        $this->selectField("sizeRootFs");

        return $this;
    }

    public function selectLabels()
    {
        $this->selectField("labels");

        return $this;
    }

    public function selectState()
    {
        $this->selectField("state");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectHostConfig(DockerContainerHostConfigArgumentsObject $argsObject = null)
    {
        $object = new ContainerHostConfigQueryObject("hostConfig");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNetworkSettings()
    {
        $this->selectField("networkSettings");

        return $this;
    }

    public function selectMounts()
    {
        $this->selectField("mounts");

        return $this;
    }

    public function selectAutoStart()
    {
        $this->selectField("autoStart");

        return $this;
    }
}
