<?php

namespace App\Http\Services;

use GuzzleHttp\Client;

class SwapService
{
    /** @var Client */
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function connect()
    {
        return $this->client->request('GET', 'https://swapi.co/api/people/');
    }
}
