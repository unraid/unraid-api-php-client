<?php

namespace GraphQL\SchemaObject;

class RootDockerNetworkArgumentsObject extends ArgumentsObject
{
    protected $id;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
