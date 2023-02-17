<?php

namespace GraphQL\SchemaObject;

class RootServerArgumentsObject extends ArgumentsObject
{
    protected $name;

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
