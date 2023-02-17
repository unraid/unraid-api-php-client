<?php

namespace GraphQL\SchemaObject;

class RootDockerNetworksArgumentsObject extends ArgumentsObject
{
    protected $all;

    public function setAll($all)
    {
        $this->all = $all;

        return $this;
    }
}
