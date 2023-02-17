<?php

namespace GraphQL\SchemaObject;

class RootServiceArgumentsObject extends ArgumentsObject
{
    protected $name;

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
