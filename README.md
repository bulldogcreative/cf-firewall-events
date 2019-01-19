# Cloudflare Firewall Events

Retrieve the logs from the Cloudflare Firewall.

## Usage

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
