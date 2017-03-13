<?php

namespace Mastashake08\Forge;

use GuzzleHttp\Client;

trait InteractsWithAPI
{
    /**
     * The client variable use to make requests.
     *
     * @var Client
     */
    private $_client;

    /**
     * Initialize the client.
     *
     * @return void
     */
    private function init()
    {
        $this->_client = new Client([
            'base_uri' => Forge::getBaseUrl(),
        ]);
    }

    /**
     * Make the api request.
     *
     * @param $method
     * @param $url
     * @param array $params
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function sendRequest($method, $url, $params = [])
    {
        if ($this->_client == null) {
            $this->init();
        }

        $res = $this->_client->request($method, $url, [
            'headers' => [
                'Authorization' => 'Bearer '.Forge::getApiKey(),
                'Accept'        => 'application/json',
                'Content-Type'  => 'application/json',
            ],
            'json' => $params,
        ]);

        return $res->getBody();
    }
}
