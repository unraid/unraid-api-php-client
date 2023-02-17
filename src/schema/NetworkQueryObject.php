<?php

namespace GraphQL\SchemaObject;

class NetworkQueryObject extends QueryObject
{
    const OBJECT_NAME = "Network";

    public function selectIface()
    {
        $this->selectField("iface");

        return $this;
    }

    public function selectIfaceName()
    {
        $this->selectField("ifaceName");

        return $this;
    }

    public function selectIpv4()
    {
        $this->selectField("ipv4");

        return $this;
    }

    public function selectIpv6()
    {
        $this->selectField("ipv6");

        return $this;
    }

    public function selectMac()
    {
        $this->selectField("mac");

        return $this;
    }

    public function selectInternal()
    {
        $this->selectField("internal");

        return $this;
    }

    public function selectOperstate()
    {
        $this->selectField("operstate");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectDuplex()
    {
        $this->selectField("duplex");

        return $this;
    }

    public function selectMtu()
    {
        $this->selectField("mtu");

        return $this;
    }

    public function selectSpeed()
    {
        $this->selectField("speed");

        return $this;
    }

    public function selectCarrierChanges()
    {
        $this->selectField("carrierChanges");

        return $this;
    }
}
