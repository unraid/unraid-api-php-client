<?php

namespace GraphQL\SchemaObject;

class RootQueryObject extends QueryObject
{
    const OBJECT_NAME = "";

    public function selectWelcome(RootWelcomeArgumentsObject $argsObject = null)
    {
        $object = new WelcomeQueryObject("welcome");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOnline()
    {
        $this->selectField("online");

        return $this;
    }

    public function selectInfo(RootInfoArgumentsObject $argsObject = null)
    {
        $object = new InfoQueryObject("info");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTestQuery()
    {
        $this->selectField("testQuery");

        return $this;
    }

    public function selectApiKeys(RootApiKeysArgumentsObject $argsObject = null)
    {
        $object = new ApiKeyQueryObject("apiKeys");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectArray(RootArrayArgumentsObject $argsObject = null)
    {
        $object = new ArrayQueryObject("array");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectParityHistory(RootParityHistoryArgumentsObject $argsObject = null)
    {
        $object = new ParityCheckQueryObject("parityHistory");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCloud(RootCloudArgumentsObject $argsObject = null)
    {
        $object = new CloudQueryObject("cloud");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectConfig(RootConfigArgumentsObject $argsObject = null)
    {
        $object = new ConfigQueryObject("config");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCrashReportingEnabled()
    {
        $this->selectField("crashReportingEnabled");

        return $this;
    }

    public function selectDashboard(RootDashboardArgumentsObject $argsObject = null)
    {
        $object = new DashboardQueryObject("dashboard");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDevice(RootDeviceArgumentsObject $argsObject = null)
    {
        $object = new DeviceQueryObject("device");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDevices(RootDevicesArgumentsObject $argsObject = null)
    {
        $object = new DeviceQueryObject("devices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDisk(RootDiskArgumentsObject $argsObject = null)
    {
        $object = new DiskQueryObject("disk");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDisks(RootDisksArgumentsObject $argsObject = null)
    {
        $object = new DiskQueryObject("disks");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDisplay(RootDisplayArgumentsObject $argsObject = null)
    {
        $object = new DisplayQueryObject("display");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDockerContainer(RootDockerContainerArgumentsObject $argsObject = null)
    {
        $object = new DockerContainerQueryObject("dockerContainer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDockerContainers(RootDockerContainersArgumentsObject $argsObject = null)
    {
        $object = new DockerContainerQueryObject("dockerContainers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDockerNetwork(RootDockerNetworkArgumentsObject $argsObject = null)
    {
        $object = new DockerNetworkQueryObject("dockerNetwork");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDockerNetworks(RootDockerNetworksArgumentsObject $argsObject = null)
    {
        $object = new DockerNetworkQueryObject("dockerNetworks");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFlash(RootFlashArgumentsObject $argsObject = null)
    {
        $object = new FlashQueryObject("flash");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOwner(RootOwnerArgumentsObject $argsObject = null)
    {
        $object = new OwnerQueryObject("owner");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRegistration(RootRegistrationArgumentsObject $argsObject = null)
    {
        $object = new RegistrationQueryObject("registration");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPermissions(RootPermissionsArgumentsObject $argsObject = null)
    {
        $object = new PermissionsQueryObject("permissions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectServer(RootServerArgumentsObject $argsObject = null)
    {
        $object = new ServerQueryObject("server");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectServers(RootServersArgumentsObject $argsObject = null)
    {
        $object = new ServerQueryObject("servers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectService(RootServiceArgumentsObject $argsObject = null)
    {
        $object = new ServiceQueryObject("service");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectServices(RootServicesArgumentsObject $argsObject = null)
    {
        $object = new ServiceQueryObject("services");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShares(RootSharesArgumentsObject $argsObject = null)
    {
        $object = new ShareQueryObject("shares");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTwoFactor(RootTwoFactorArgumentsObject $argsObject = null)
    {
        $object = new TwoFactorWithTokenQueryObject("twoFactor");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUnassignedDevices(RootUnassignedDevicesArgumentsObject $argsObject = null)
    {
        $object = new UnassignedDeviceQueryObject("unassignedDevices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMe(RootMeArgumentsObject $argsObject = null)
    {
        $object = new MeQueryObject("me");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUser(RootUserArgumentsObject $argsObject = null)
    {
        $object = new UserQueryObject("user");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUsers(RootUsersArgumentsObject $argsObject = null)
    {
        $object = new UserQueryObject("users");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVars(RootVarsArgumentsObject $argsObject = null)
    {
        $object = new VarsQueryObject("vars");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVms(RootVmsArgumentsObject $argsObject = null)
    {
        $object = new VmsQueryObject("vms");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVmNetwork()
    {
        $this->selectField("vmNetwork");

        return $this;
    }
}
