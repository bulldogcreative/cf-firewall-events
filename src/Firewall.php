<?php

namespace Bulldog\Cloudflare;

use GuzzleHttp\ClientInterface;
use Psr\Http\Message\ResponseInterface;

class Firewall
{
    private $client;
    private $debug = false;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * Logs of the mitigations performed by Firewall features.
     *
     * @see https://api.cloudflare.com/#firewall-events-list-events
     * @param string $zoneIdentifier
     * @param array $parameters
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function events(string $zoneIdentifier, array $parameters = []): ResponseInterface
    {
        return $this->client->request(
            'GET', 
            'zones/'.$zoneIdentifier.'/security/events',
            [
                'debug' => $this->debug,
                'query' => $parameters,
            ]
        );
    }

    /**
     * Set to true to enable debug output with the handler used to send a request.
     *
     * @param bool $debug
     */
    public function setDebug(bool $debug)
    {
        $this->debug = $debug;
    }
}
