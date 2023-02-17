<?php

namespace GraphQL\SchemaObject;

class VmStateEnumObject extends EnumObject
{
    const NOSTATE = "NOSTATE";
    const RUNNING = "RUNNING";
    const IDLE = "IDLE";
    const PAUSED = "PAUSED";
    const SHUTDOWN = "SHUTDOWN";
    const SHUTOFF = "SHUTOFF";
    const CRASHED = "CRASHED";
    const PMSUSPENDED = "PMSUSPENDED";
}
