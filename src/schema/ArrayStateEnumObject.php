<?php

namespace GraphQL\SchemaObject;

class ArrayStateEnumObject extends EnumObject
{
    const STARTED = "started";
    const STOPPED = "stopped";
    const NEW_ARRAY = "new_array";
    const RECON_DISK = "recon_disk";
    const DISABLE_DISK = "disable_disk";
    const SWAP_DSBL = "swap_dsbl";
    const INVALID_EXPANSION = "invalid_expansion";
    const PARITY_NOT_BIGGEST = "parity_not_biggest";
    const TOO_MANY_MISSING_DISKS = "too_many_missing_disks";
    const NEW_DISK_TOO_SMALL = "new_disk_too_small";
    const NO_DATA_DISKS = "no_data_disks";
}
