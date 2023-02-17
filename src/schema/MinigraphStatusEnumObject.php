<?php

namespace GraphQL\SchemaObject;

class MinigraphStatusEnumObject extends EnumObject
{
    const CONNECTING = "CONNECTING";
    const CONNECTED = "CONNECTED";
    const ERROR = "ERROR";
    const DISCONNECTED = "DISCONNECTED";
    const RETRY_WAITING = "RETRY_WAITING";
}
