# unraid-api-php-client
Unraid API PHP Client

Uses https://github.com/mghoneimy/php-graphql-oqm to generate PHP schema from Unraid API, which can then be used to map onto various Unraid functions

## Running an example

Run composer run example to query a local GQL instance (listening on port 4000) for the minigraph connection status. 

The response is currently stringified, but in production you can index into it. 