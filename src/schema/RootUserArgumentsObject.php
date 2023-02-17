<?php

namespace GraphQL\SchemaObject;

class RootUserArgumentsObject extends ArgumentsObject
{
    protected $id;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
