<?php

namespace GraphQL\SchemaObject;

class ArrayPendingStateEnumObject extends EnumObject
{
    const STARTING = "starting";
    const STOPPING = "stopping";
    const NO_DATA_DISKS = "no_data_disks";
    const TOO_MANY_MISSING_DISKS = "too_many_missing_disks";
}
