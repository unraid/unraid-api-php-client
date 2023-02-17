<?php

namespace GraphQL\SchemaObject;

class DevicesQueryObject extends QueryObject
{
    const OBJECT_NAME = "Devices";

    public function selectGpu(DevicesGpuArgumentsObject $argsObject = null)
    {
        $object = new GpuQueryObject("gpu");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNetwork(DevicesNetworkArgumentsObject $argsObject = null)
    {
        $object = new NetworkQueryObject("network");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPci(DevicesPciArgumentsObject $argsObject = null)
    {
        $object = new PciQueryObject("pci");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUsb(DevicesUsbArgumentsObject $argsObject = null)
    {
        $object = new UsbQueryObject("usb");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
