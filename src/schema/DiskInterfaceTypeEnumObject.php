<?php

namespace GraphQL\SchemaObject;

class DiskInterfaceTypeEnumObject extends EnumObject
{
    const SAS = "SAS";
    const SATA = "SATA";
    const USB = "USB";
    const PCIE = "PCIe";
    const UNKNOWN = "UNKNOWN";
}
