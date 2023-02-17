<?php

namespace GraphQL\SchemaObject;

class DiskQueryObject extends QueryObject
{
    const OBJECT_NAME = "Disk";

    public function selectDevice()
    {
        $this->selectField("device");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectVendor()
    {
        $this->selectField("vendor");

        return $this;
    }

    public function selectSize()
    {
        $this->selectField("size");

        return $this;
    }

    public function selectBytesPerSector()
    {
        $this->selectField("bytesPerSector");

        return $this;
    }

    public function selectTotalCylinders()
    {
        $this->selectField("totalCylinders");

        return $this;
    }

    public function selectTotalHeads()
    {
        $this->selectField("totalHeads");

        return $this;
    }

    public function selectTotalSectors()
    {
        $this->selectField("totalSectors");

        return $this;
    }

    public function selectTotalTracks()
    {
        $this->selectField("totalTracks");

        return $this;
    }

    public function selectTracksPerCylinder()
    {
        $this->selectField("tracksPerCylinder");

        return $this;
    }

    public function selectSectorsPerTrack()
    {
        $this->selectField("sectorsPerTrack");

        return $this;
    }

    public function selectFirmwareRevision()
    {
        $this->selectField("firmwareRevision");

        return $this;
    }

    public function selectSerialNum()
    {
        $this->selectField("serialNum");

        return $this;
    }

    public function selectInterfaceType()
    {
        $this->selectField("interfaceType");

        return $this;
    }

    public function selectSmartStatus()
    {
        $this->selectField("smartStatus");

        return $this;
    }

    public function selectTemperature()
    {
        $this->selectField("temperature");

        return $this;
    }

    public function selectPartitions(DiskPartitionsArgumentsObject $argsObject = null)
    {
        $object = new DiskPartitionQueryObject("partitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
