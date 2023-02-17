<?php

namespace GraphQL\SchemaObject;

class DockerNetworkQueryObject extends QueryObject
{
    const OBJECT_NAME = "DockerNetwork";

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectCreated()
    {
        $this->selectField("created");

        return $this;
    }

    public function selectScope()
    {
        $this->selectField("scope");

        return $this;
    }

    public function selectDriver()
    {
        $this->selectField("driver");

        return $this;
    }

    public function selectEnableIPv6()
    {
        $this->selectField("enableIPv6");

        return $this;
    }

    public function selectIpam()
    {
        $this->selectField("ipam");

        return $this;
    }

    public function selectInternal()
    {
        $this->selectField("internal");

        return $this;
    }

    public function selectAttachable()
    {
        $this->selectField("attachable");

        return $this;
    }

    public function selectIngress()
    {
        $this->selectField("ingress");

        return $this;
    }

    public function selectConfigFrom()
    {
        $this->selectField("configFrom");

        return $this;
    }

    public function selectConfigOnly()
    {
        $this->selectField("configOnly");

        return $this;
    }

    public function selectContainers()
    {
        $this->selectField("containers");

        return $this;
    }

    public function selectOptions()
    {
        $this->selectField("options");

        return $this;
    }

    public function selectLabels()
    {
        $this->selectField("labels");

        return $this;
    }
}
