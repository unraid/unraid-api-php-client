<?php

namespace GraphQL\SchemaObject;

class VarsQueryObject extends QueryObject
{
    const OBJECT_NAME = "Vars";

    public function selectVersion()
    {
        $this->selectField("version");

        return $this;
    }

    public function selectMaxArraysz()
    {
        $this->selectField("maxArraysz");

        return $this;
    }

    public function selectMaxCachesz()
    {
        $this->selectField("maxCachesz");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectTimeZone()
    {
        $this->selectField("timeZone");

        return $this;
    }

    public function selectComment()
    {
        $this->selectField("comment");

        return $this;
    }

    public function selectSecurity()
    {
        $this->selectField("security");

        return $this;
    }

    public function selectWorkgroup()
    {
        $this->selectField("workgroup");

        return $this;
    }

    public function selectDomain()
    {
        $this->selectField("domain");

        return $this;
    }

    public function selectDomainShort()
    {
        $this->selectField("domainShort");

        return $this;
    }

    public function selectHideDotFiles()
    {
        $this->selectField("hideDotFiles");

        return $this;
    }

    public function selectLocalMaster()
    {
        $this->selectField("localMaster");

        return $this;
    }

    public function selectEnableFruit()
    {
        $this->selectField("enableFruit");

        return $this;
    }

    public function selectUseNtp()
    {
        $this->selectField("useNtp");

        return $this;
    }

    public function selectNtpServer1()
    {
        $this->selectField("ntpServer1");

        return $this;
    }

    public function selectNtpServer2()
    {
        $this->selectField("ntpServer2");

        return $this;
    }

    public function selectNtpServer3()
    {
        $this->selectField("ntpServer3");

        return $this;
    }

    public function selectNtpServer4()
    {
        $this->selectField("ntpServer4");

        return $this;
    }

    public function selectDomainLogin()
    {
        $this->selectField("domainLogin");

        return $this;
    }

    public function selectSysModel()
    {
        $this->selectField("sysModel");

        return $this;
    }

    public function selectSysArraySlots()
    {
        $this->selectField("sysArraySlots");

        return $this;
    }

    public function selectSysCacheSlots()
    {
        $this->selectField("sysCacheSlots");

        return $this;
    }

    public function selectSysFlashSlots()
    {
        $this->selectField("sysFlashSlots");

        return $this;
    }

    public function selectUseSsl()
    {
        $this->selectField("useSsl");

        return $this;
    }

    public function selectPort()
    {
        $this->selectField("port");

        return $this;
    }

    public function selectPortssl()
    {
        $this->selectField("portssl");

        return $this;
    }

    public function selectLocalTld()
    {
        $this->selectField("localTld");

        return $this;
    }

    public function selectBindMgt()
    {
        $this->selectField("bindMgt");

        return $this;
    }

    public function selectUseTelnet()
    {
        $this->selectField("useTelnet");

        return $this;
    }

    public function selectPorttelnet()
    {
        $this->selectField("porttelnet");

        return $this;
    }

    public function selectUseSsh()
    {
        $this->selectField("useSsh");

        return $this;
    }

    public function selectPortssh()
    {
        $this->selectField("portssh");

        return $this;
    }

    public function selectStartPage()
    {
        $this->selectField("startPage");

        return $this;
    }

    public function selectStartArray()
    {
        $this->selectField("startArray");

        return $this;
    }

    public function selectSpindownDelay()
    {
        $this->selectField("spindownDelay");

        return $this;
    }

    public function selectQueueDepth()
    {
        $this->selectField("queueDepth");

        return $this;
    }

    public function selectSpinupGroups()
    {
        $this->selectField("spinupGroups");

        return $this;
    }

    public function selectDefaultFormat()
    {
        $this->selectField("defaultFormat");

        return $this;
    }

    public function selectDefaultFsType()
    {
        $this->selectField("defaultFsType");

        return $this;
    }

    public function selectShutdownTimeout()
    {
        $this->selectField("shutdownTimeout");

        return $this;
    }

    public function selectLuksKeyfile()
    {
        $this->selectField("luksKeyfile");

        return $this;
    }

    public function selectPollAttributes()
    {
        $this->selectField("pollAttributes");

        return $this;
    }

    public function selectPollAttributesDefault()
    {
        $this->selectField("pollAttributesDefault");

        return $this;
    }

    public function selectPollAttributesStatus()
    {
        $this->selectField("pollAttributesStatus");

        return $this;
    }

    public function selectNrRequests()
    {
        $this->selectField("nrRequests");

        return $this;
    }

    public function selectNrRequestsDefault()
    {
        $this->selectField("nrRequestsDefault");

        return $this;
    }

    public function selectNrRequestsStatus()
    {
        $this->selectField("nrRequestsStatus");

        return $this;
    }

    public function selectMdNumStripes()
    {
        $this->selectField("mdNumStripes");

        return $this;
    }

    public function selectMdNumStripesDefault()
    {
        $this->selectField("mdNumStripesDefault");

        return $this;
    }

    public function selectMdNumStripesStatus()
    {
        $this->selectField("mdNumStripesStatus");

        return $this;
    }

    public function selectMdSyncWindow()
    {
        $this->selectField("mdSyncWindow");

        return $this;
    }

    public function selectMdSyncWindowDefault()
    {
        $this->selectField("mdSyncWindowDefault");

        return $this;
    }

    public function selectMdSyncWindowStatus()
    {
        $this->selectField("mdSyncWindowStatus");

        return $this;
    }

    public function selectMdSyncThresh()
    {
        $this->selectField("mdSyncThresh");

        return $this;
    }

    public function selectMdSyncThreshDefault()
    {
        $this->selectField("mdSyncThreshDefault");

        return $this;
    }

    public function selectMdSyncThreshStatus()
    {
        $this->selectField("mdSyncThreshStatus");

        return $this;
    }

    public function selectMdWriteMethod()
    {
        $this->selectField("mdWriteMethod");

        return $this;
    }

    public function selectMdWriteMethodDefault()
    {
        $this->selectField("mdWriteMethodDefault");

        return $this;
    }

    public function selectMdWriteMethodStatus()
    {
        $this->selectField("mdWriteMethodStatus");

        return $this;
    }

    public function selectShareDisk()
    {
        $this->selectField("shareDisk");

        return $this;
    }

    public function selectShareUser()
    {
        $this->selectField("shareUser");

        return $this;
    }

    public function selectShareUserInclude()
    {
        $this->selectField("shareUserInclude");

        return $this;
    }

    public function selectShareUserExclude()
    {
        $this->selectField("shareUserExclude");

        return $this;
    }

    public function selectShareSmbEnabled()
    {
        $this->selectField("shareSmbEnabled");

        return $this;
    }

    public function selectShareNfsEnabled()
    {
        $this->selectField("shareNfsEnabled");

        return $this;
    }

    public function selectShareAfpEnabled()
    {
        $this->selectField("shareAfpEnabled");

        return $this;
    }

    public function selectShareInitialOwner()
    {
        $this->selectField("shareInitialOwner");

        return $this;
    }

    public function selectShareInitialGroup()
    {
        $this->selectField("shareInitialGroup");

        return $this;
    }

    public function selectShareCacheEnabled()
    {
        $this->selectField("shareCacheEnabled");

        return $this;
    }

    public function selectShareCacheFloor()
    {
        $this->selectField("shareCacheFloor");

        return $this;
    }

    public function selectShareMoverSchedule()
    {
        $this->selectField("shareMoverSchedule");

        return $this;
    }

    public function selectShareMoverLogging()
    {
        $this->selectField("shareMoverLogging");

        return $this;
    }

    public function selectFuseRemember()
    {
        $this->selectField("fuseRemember");

        return $this;
    }

    public function selectFuseRememberDefault()
    {
        $this->selectField("fuseRememberDefault");

        return $this;
    }

    public function selectFuseRememberStatus()
    {
        $this->selectField("fuseRememberStatus");

        return $this;
    }

    public function selectFuseDirectio()
    {
        $this->selectField("fuseDirectio");

        return $this;
    }

    public function selectFuseDirectioDefault()
    {
        $this->selectField("fuseDirectioDefault");

        return $this;
    }

    public function selectFuseDirectioStatus()
    {
        $this->selectField("fuseDirectioStatus");

        return $this;
    }

    public function selectShareAvahiEnabled()
    {
        $this->selectField("shareAvahiEnabled");

        return $this;
    }

    public function selectShareAvahiSmbName()
    {
        $this->selectField("shareAvahiSmbName");

        return $this;
    }

    public function selectShareAvahiSmbModel()
    {
        $this->selectField("shareAvahiSmbModel");

        return $this;
    }

    public function selectShareAvahiAfpName()
    {
        $this->selectField("shareAvahiAfpName");

        return $this;
    }

    public function selectShareAvahiAfpModel()
    {
        $this->selectField("shareAvahiAfpModel");

        return $this;
    }

    public function selectSafeMode()
    {
        $this->selectField("safeMode");

        return $this;
    }

    public function selectStartMode()
    {
        $this->selectField("startMode");

        return $this;
    }

    public function selectConfigValid()
    {
        $this->selectField("configValid");

        return $this;
    }

    public function selectConfigError()
    {
        $this->selectField("configError");

        return $this;
    }

    public function selectJoinStatus()
    {
        $this->selectField("joinStatus");

        return $this;
    }

    public function selectDeviceCount()
    {
        $this->selectField("deviceCount");

        return $this;
    }

    public function selectFlashGuid()
    {
        $this->selectField("flashGuid");

        return $this;
    }

    public function selectFlashProduct()
    {
        $this->selectField("flashProduct");

        return $this;
    }

    public function selectFlashVendor()
    {
        $this->selectField("flashVendor");

        return $this;
    }

    public function selectRegCheck()
    {
        $this->selectField("regCheck");

        return $this;
    }

    public function selectRegFile()
    {
        $this->selectField("regFile");

        return $this;
    }

    public function selectRegGuid()
    {
        $this->selectField("regGuid");

        return $this;
    }

    public function selectRegTy()
    {
        $this->selectField("regTy");

        return $this;
    }

    public function selectRegState()
    {
        $this->selectField("regState");

        return $this;
    }

    public function selectRegTo()
    {
        $this->selectField("regTo");

        return $this;
    }

    public function selectRegTm()
    {
        $this->selectField("regTm");

        return $this;
    }

    public function selectRegTm2()
    {
        $this->selectField("regTm2");

        return $this;
    }

    public function selectRegGen()
    {
        $this->selectField("regGen");

        return $this;
    }

    public function selectSbName()
    {
        $this->selectField("sbName");

        return $this;
    }

    public function selectSbVersion()
    {
        $this->selectField("sbVersion");

        return $this;
    }

    public function selectSbUpdated()
    {
        $this->selectField("sbUpdated");

        return $this;
    }

    public function selectSbEvents()
    {
        $this->selectField("sbEvents");

        return $this;
    }

    public function selectSbState()
    {
        $this->selectField("sbState");

        return $this;
    }

    public function selectSbClean()
    {
        $this->selectField("sbClean");

        return $this;
    }

    public function selectSbSynced()
    {
        $this->selectField("sbSynced");

        return $this;
    }

    public function selectSbSyncErrs()
    {
        $this->selectField("sbSyncErrs");

        return $this;
    }

    public function selectSbSynced2()
    {
        $this->selectField("sbSynced2");

        return $this;
    }

    public function selectSbSyncExit()
    {
        $this->selectField("sbSyncExit");

        return $this;
    }

    public function selectSbNumDisks()
    {
        $this->selectField("sbNumDisks");

        return $this;
    }

    public function selectMdColor()
    {
        $this->selectField("mdColor");

        return $this;
    }

    public function selectMdNumDisks()
    {
        $this->selectField("mdNumDisks");

        return $this;
    }

    public function selectMdNumDisabled()
    {
        $this->selectField("mdNumDisabled");

        return $this;
    }

    public function selectMdNumInvalid()
    {
        $this->selectField("mdNumInvalid");

        return $this;
    }

    public function selectMdNumMissing()
    {
        $this->selectField("mdNumMissing");

        return $this;
    }

    public function selectMdNumNew()
    {
        $this->selectField("mdNumNew");

        return $this;
    }

    public function selectMdNumErased()
    {
        $this->selectField("mdNumErased");

        return $this;
    }

    public function selectMdResync()
    {
        $this->selectField("mdResync");

        return $this;
    }

    public function selectMdResyncCorr()
    {
        $this->selectField("mdResyncCorr");

        return $this;
    }

    public function selectMdResyncPos()
    {
        $this->selectField("mdResyncPos");

        return $this;
    }

    public function selectMdResyncDb()
    {
        $this->selectField("mdResyncDb");

        return $this;
    }

    public function selectMdResyncDt()
    {
        $this->selectField("mdResyncDt");

        return $this;
    }

    public function selectMdResyncAction()
    {
        $this->selectField("mdResyncAction");

        return $this;
    }

    public function selectMdResyncSize()
    {
        $this->selectField("mdResyncSize");

        return $this;
    }

    public function selectMdState()
    {
        $this->selectField("mdState");

        return $this;
    }

    public function selectMdVersion()
    {
        $this->selectField("mdVersion");

        return $this;
    }

    public function selectCacheNumDevices()
    {
        $this->selectField("cacheNumDevices");

        return $this;
    }

    public function selectCacheSbNumDisks()
    {
        $this->selectField("cacheSbNumDisks");

        return $this;
    }

    public function selectFsState()
    {
        $this->selectField("fsState");

        return $this;
    }

    public function selectFsProgress()
    {
        $this->selectField("fsProgress");

        return $this;
    }

    public function selectFsCopyPrcnt()
    {
        $this->selectField("fsCopyPrcnt");

        return $this;
    }

    public function selectFsNumMounted()
    {
        $this->selectField("fsNumMounted");

        return $this;
    }

    public function selectFsNumUnmountable()
    {
        $this->selectField("fsNumUnmountable");

        return $this;
    }

    public function selectFsUnmountableMask()
    {
        $this->selectField("fsUnmountableMask");

        return $this;
    }

    public function selectShareCount()
    {
        $this->selectField("shareCount");

        return $this;
    }

    public function selectShareSmbCount()
    {
        $this->selectField("shareSmbCount");

        return $this;
    }

    public function selectShareNfsCount()
    {
        $this->selectField("shareNfsCount");

        return $this;
    }

    public function selectShareAfpCount()
    {
        $this->selectField("shareAfpCount");

        return $this;
    }

    public function selectShareMoverActive()
    {
        $this->selectField("shareMoverActive");

        return $this;
    }

    public function selectCsrfToken()
    {
        $this->selectField("csrfToken");

        return $this;
    }
}
