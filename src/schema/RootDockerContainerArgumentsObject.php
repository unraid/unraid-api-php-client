<?php

namespace GraphQL\SchemaObject;

class RootDockerContainerArgumentsObject extends ArgumentsObject
{
    protected $id;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
