<?php

namespace GraphQL\SchemaObject;

class RootDockerContainersArgumentsObject extends ArgumentsObject
{
    protected $all;

    public function setAll($all)
    {
        $this->all = $all;

        return $this;
    }
}
