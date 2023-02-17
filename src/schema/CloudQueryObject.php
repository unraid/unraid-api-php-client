<?php

namespace GraphQL\SchemaObject;

class CloudQueryObject extends QueryObject
{
    const OBJECT_NAME = "Cloud";

    public function selectError()
    {
        $this->selectField("error");

        return $this;
    }

    public function selectApiKey(CloudApiKeyArgumentsObject $argsObject = null)
    {
        $object = new ApiKeyResponseQueryObject("apiKey");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRelay(CloudRelayArgumentsObject $argsObject = null)
    {
        $object = new RelayResponseQueryObject("relay");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMinigraphql(CloudMinigraphqlArgumentsObject $argsObject = null)
    {
        $object = new MinigraphqlResponseQueryObject("minigraphql");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCloud(CloudCloudArgumentsObject $argsObject = null)
    {
        $object = new CloudResponseQueryObject("cloud");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAllowedOrigins()
    {
        $this->selectField("allowedOrigins");

        return $this;
    }
}
