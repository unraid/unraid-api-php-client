<?php

namespace GraphQL\SchemaObject;

class usersInputInputObject extends InputObject
{
    protected $slim;

    public function setSlim($slim)
    {
        $this->slim = $slim;

        return $this;
    }
}
