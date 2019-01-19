<?php

namespace Bulldog\Cloudflare;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;

class Firewall
{
    private $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @param string $zoneIdentifier
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function events(string $zoneIdentifier): ResponseInterface
    {
        return $this->client->request('GET', 'zones/'.$zoneIdentifier.'/security/events');
    }
}
