<?php

namespace GraphQL\SchemaObject;

class ConfigErrorStateEnumObject extends EnumObject
{
    const UNKNOWN_ERROR = "UNKNOWN_ERROR";
    const INVALID = "INVALID";
    const NO_KEY_SERVER = "NO_KEY_SERVER";
    const WITHDRAWN = "WITHDRAWN";
}
