<?php

namespace GraphQL\SchemaObject;

class PartitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "Partition";

    public function selectDevlinks()
    {
        $this->selectField("devlinks");

        return $this;
    }

    public function selectDevname()
    {
        $this->selectField("devname");

        return $this;
    }

    public function selectDevpath()
    {
        $this->selectField("devpath");

        return $this;
    }

    public function selectDevtype()
    {
        $this->selectField("devtype");

        return $this;
    }

    public function selectIdAta()
    {
        $this->selectField("idAta");

        return $this;
    }

    public function selectIdAtaDownloadMicrocode()
    {
        $this->selectField("idAtaDownloadMicrocode");

        return $this;
    }

    public function selectIdAtaFeatureSetAam()
    {
        $this->selectField("idAtaFeatureSetAam");

        return $this;
    }

    public function selectIdAtaFeatureSetAamCurrentValue()
    {
        $this->selectField("idAtaFeatureSetAamCurrentValue");

        return $this;
    }

    public function selectIdAtaFeatureSetAamEnabled()
    {
        $this->selectField("idAtaFeatureSetAamEnabled");

        return $this;
    }

    public function selectIdAtaFeatureSetAamVendorRecommendedValue()
    {
        $this->selectField("idAtaFeatureSetAamVendorRecommendedValue");

        return $this;
    }

    public function selectIdAtaFeatureSetApm()
    {
        $this->selectField("idAtaFeatureSetApm");

        return $this;
    }

    public function selectIdAtaFeatureSetApmCurrentValue()
    {
        $this->selectField("idAtaFeatureSetApmCurrentValue");

        return $this;
    }

    public function selectIdAtaFeatureSetApmEnabled()
    {
        $this->selectField("idAtaFeatureSetApmEnabled");

        return $this;
    }

    public function selectIdAtaFeatureSetHpa()
    {
        $this->selectField("idAtaFeatureSetHpa");

        return $this;
    }

    public function selectIdAtaFeatureSetHpaEnabled()
    {
        $this->selectField("idAtaFeatureSetHpaEnabled");

        return $this;
    }

    public function selectIdAtaFeatureSetPm()
    {
        $this->selectField("idAtaFeatureSetPm");

        return $this;
    }

    public function selectIdAtaFeatureSetPmEnabled()
    {
        $this->selectField("idAtaFeatureSetPmEnabled");

        return $this;
    }

    public function selectIdAtaFeatureSetPuis()
    {
        $this->selectField("idAtaFeatureSetPuis");

        return $this;
    }

    public function selectIdAtaFeatureSetPuisEnabled()
    {
        $this->selectField("idAtaFeatureSetPuisEnabled");

        return $this;
    }

    public function selectIdAtaFeatureSetSecurity()
    {
        $this->selectField("idAtaFeatureSetSecurity");

        return $this;
    }

    public function selectIdAtaFeatureSetSecurityEnabled()
    {
        $this->selectField("idAtaFeatureSetSecurityEnabled");

        return $this;
    }

    public function selectIdAtaFeatureSetSecurityEnhancedEraseUnitMin()
    {
        $this->selectField("idAtaFeatureSetSecurityEnhancedEraseUnitMin");

        return $this;
    }

    public function selectIdAtaFeatureSetSecurityEraseUnitMin()
    {
        $this->selectField("idAtaFeatureSetSecurityEraseUnitMin");

        return $this;
    }

    public function selectIdAtaFeatureSetSmart()
    {
        $this->selectField("idAtaFeatureSetSmart");

        return $this;
    }

    public function selectIdAtaFeatureSetSmartEnabled()
    {
        $this->selectField("idAtaFeatureSetSmartEnabled");

        return $this;
    }

    public function selectIdAtaRotationRateRpm()
    {
        $this->selectField("idAtaRotationRateRpm");

        return $this;
    }

    public function selectIdAtaSata()
    {
        $this->selectField("idAtaSata");

        return $this;
    }

    public function selectIdAtaSataSignalRateGen1()
    {
        $this->selectField("idAtaSataSignalRateGen1");

        return $this;
    }

    public function selectIdAtaSataSignalRateGen2()
    {
        $this->selectField("idAtaSataSignalRateGen2");

        return $this;
    }

    public function selectIdAtaWriteCache()
    {
        $this->selectField("idAtaWriteCache");

        return $this;
    }

    public function selectIdAtaWriteCacheEnabled()
    {
        $this->selectField("idAtaWriteCacheEnabled");

        return $this;
    }

    public function selectIdBus()
    {
        $this->selectField("idBus");

        return $this;
    }

    public function selectIdFsType()
    {
        $this->selectField("idFsType");

        return $this;
    }

    public function selectIdFsUsage()
    {
        $this->selectField("idFsUsage");

        return $this;
    }

    public function selectIdFsUuid()
    {
        $this->selectField("idFsUuid");

        return $this;
    }

    public function selectIdFsUuidEnc()
    {
        $this->selectField("idFsUuidEnc");

        return $this;
    }

    public function selectIdModel()
    {
        $this->selectField("idModel");

        return $this;
    }

    public function selectIdModelEnc()
    {
        $this->selectField("idModelEnc");

        return $this;
    }

    public function selectIdPartEntryDisk()
    {
        $this->selectField("idPartEntryDisk");

        return $this;
    }

    public function selectIdPartEntryNumber()
    {
        $this->selectField("idPartEntryNumber");

        return $this;
    }

    public function selectIdPartEntryOffset()
    {
        $this->selectField("idPartEntryOffset");

        return $this;
    }

    public function selectIdPartEntryScheme()
    {
        $this->selectField("idPartEntryScheme");

        return $this;
    }

    public function selectIdPartEntrySize()
    {
        $this->selectField("idPartEntrySize");

        return $this;
    }

    public function selectIdPartEntryType()
    {
        $this->selectField("idPartEntryType");

        return $this;
    }

    public function selectIdPartTableType()
    {
        $this->selectField("idPartTableType");

        return $this;
    }

    public function selectIdPath()
    {
        $this->selectField("idPath");

        return $this;
    }

    public function selectIdPathTag()
    {
        $this->selectField("idPathTag");

        return $this;
    }

    public function selectIdRevision()
    {
        $this->selectField("idRevision");

        return $this;
    }

    public function selectIdSerial()
    {
        $this->selectField("idSerial");

        return $this;
    }

    public function selectIdSerialShort()
    {
        $this->selectField("idSerialShort");

        return $this;
    }

    public function selectIdType()
    {
        $this->selectField("idType");

        return $this;
    }

    public function selectIdWwn()
    {
        $this->selectField("idWwn");

        return $this;
    }

    public function selectIdWwnWithExtension()
    {
        $this->selectField("idWwnWithExtension");

        return $this;
    }

    public function selectMajor()
    {
        $this->selectField("major");

        return $this;
    }

    public function selectMinor()
    {
        $this->selectField("minor");

        return $this;
    }

    public function selectPartn()
    {
        $this->selectField("partn");

        return $this;
    }

    public function selectSubsystem()
    {
        $this->selectField("subsystem");

        return $this;
    }

    public function selectUsecInitialized()
    {
        $this->selectField("usecInitialized");

        return $this;
    }
}
