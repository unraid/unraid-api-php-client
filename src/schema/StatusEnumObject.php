<?php

namespace GraphQL\SchemaObject;

class StatusEnumObject extends EnumObject
{
    const ONLINE = "online";
    const OFFLINE = "offline";
    const NEVER_CONNECTED = "never_connected";
}
