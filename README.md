# Cloudflare Firewall Events

Retrieve the logs from the Cloudflare Firewall.

## Usage

Basic usage example with no parameters.

```php
<?php
require 'vendor/autoload.php';

$guzzle = new \GuzzleHttp\Client([
    'base_uri' => 'https://api.cloudflare.com/client/v4/',
    'headers' => [
        'X-Auth-Key' => '',
        'X-Auth-Email' => ''
    ]
]);

$fw = new \Bulldog\Cloudflare\Firewall($guzzle);
$events = $fw->events('zoneid');

$logs = $events->getBody()->getContents();
```

Limit the number of results to 10.

```php
<?php
require 'vendor/autoload.php';

$guzzle = new \GuzzleHttp\Client([
    'base_uri' => 'https://api.cloudflare.com/client/v4/',
    'headers' => [
        'X-Auth-Key' => '',
        'X-Auth-Email' => ''
    ]
]);

$fw = new \Bulldog\Cloudflare\Firewall($guzzle);
$events = $fw->events('zoneid', [
    'limit' => 10,
]);

$logs = $events->getBody()->getContents();
```

Additional options can be found in the [Cloudflare API Docs](https://api.cloudflare.com/#firewall-events-properties).
