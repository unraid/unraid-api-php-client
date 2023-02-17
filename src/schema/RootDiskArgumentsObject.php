<?php

namespace GraphQL\SchemaObject;

class RootDiskArgumentsObject extends ArgumentsObject
{
    protected $id;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
