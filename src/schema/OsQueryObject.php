<?php

namespace GraphQL\SchemaObject;

class OsQueryObject extends QueryObject
{
    const OBJECT_NAME = "Os";

    public function selectPlatform()
    {
        $this->selectField("platform");

        return $this;
    }

    public function selectDistro()
    {
        $this->selectField("distro");

        return $this;
    }

    public function selectRelease()
    {
        $this->selectField("release");

        return $this;
    }

    public function selectCodename()
    {
        $this->selectField("codename");

        return $this;
    }

    public function selectKernel()
    {
        $this->selectField("kernel");

        return $this;
    }

    public function selectArch()
    {
        $this->selectField("arch");

        return $this;
    }

    public function selectHostname()
    {
        $this->selectField("hostname");

        return $this;
    }

    public function selectCodepage()
    {
        $this->selectField("codepage");

        return $this;
    }

    public function selectLogofile()
    {
        $this->selectField("logofile");

        return $this;
    }

    public function selectSerial()
    {
        $this->selectField("serial");

        return $this;
    }

    public function selectBuild()
    {
        $this->selectField("build");

        return $this;
    }

    public function selectUptime()
    {
        $this->selectField("uptime");

        return $this;
    }
}
