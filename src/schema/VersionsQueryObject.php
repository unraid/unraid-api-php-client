<?php

namespace GraphQL\SchemaObject;

class VersionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "Versions";

    public function selectKernel()
    {
        $this->selectField("kernel");

        return $this;
    }

    public function selectOpenssl()
    {
        $this->selectField("openssl");

        return $this;
    }

    public function selectSystemOpenssl()
    {
        $this->selectField("systemOpenssl");

        return $this;
    }

    public function selectSystemOpensslLib()
    {
        $this->selectField("systemOpensslLib");

        return $this;
    }

    public function selectNode()
    {
        $this->selectField("node");

        return $this;
    }

    public function selectV8()
    {
        $this->selectField("v8");

        return $this;
    }

    public function selectNpm()
    {
        $this->selectField("npm");

        return $this;
    }

    public function selectYarn()
    {
        $this->selectField("yarn");

        return $this;
    }

    public function selectPm2()
    {
        $this->selectField("pm2");

        return $this;
    }

    public function selectGulp()
    {
        $this->selectField("gulp");

        return $this;
    }

    public function selectGrunt()
    {
        $this->selectField("grunt");

        return $this;
    }

    public function selectGit()
    {
        $this->selectField("git");

        return $this;
    }

    public function selectTsc()
    {
        $this->selectField("tsc");

        return $this;
    }

    public function selectMysql()
    {
        $this->selectField("mysql");

        return $this;
    }

    public function selectRedis()
    {
        $this->selectField("redis");

        return $this;
    }

    public function selectMongodb()
    {
        $this->selectField("mongodb");

        return $this;
    }

    public function selectApache()
    {
        $this->selectField("apache");

        return $this;
    }

    public function selectNginx()
    {
        $this->selectField("nginx");

        return $this;
    }

    public function selectPhp()
    {
        $this->selectField("php");

        return $this;
    }

    public function selectDocker()
    {
        $this->selectField("docker");

        return $this;
    }

    public function selectPostfix()
    {
        $this->selectField("postfix");

        return $this;
    }

    public function selectPostgresql()
    {
        $this->selectField("postgresql");

        return $this;
    }

    public function selectPerl()
    {
        $this->selectField("perl");

        return $this;
    }

    public function selectPython()
    {
        $this->selectField("python");

        return $this;
    }

    public function selectGcc()
    {
        $this->selectField("gcc");

        return $this;
    }

    public function selectUnraid()
    {
        $this->selectField("unraid");

        return $this;
    }
}
