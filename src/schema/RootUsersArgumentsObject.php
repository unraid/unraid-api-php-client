<?php

namespace GraphQL\SchemaObject;

class RootUsersArgumentsObject extends ArgumentsObject
{
    protected $input;

    public function setInput(usersInputInputObject $usersInputInputObject)
    {
        $this->input = $usersInputInputObject;

        return $this;
    }
}
