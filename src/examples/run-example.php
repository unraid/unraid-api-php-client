<?php 
require 'vendor/autoload.php';
use GraphQL\Client;
use GraphQL\SchemaObject\RootQueryObject;

$client = new Client(
    'http://localhost:4000/graphql/',
);


$rootObject = new RootQueryObject();
$rootObject->selectCloud()
    ->selectMinigraphql()
        ->selectStatus()
        ->selectError();

$results = $client->runQuery($rootObject->getQuery());
// This should use $results->getData() if used in production
echo $results->getResponseBody();