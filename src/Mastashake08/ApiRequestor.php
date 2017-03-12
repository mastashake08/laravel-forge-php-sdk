<?php

namespace Mastashake08\Forge;

use GuzzleHttp\Client;

class ApiRequestor
{
    private static $_client;

    private static function init()
    {
        self::$_client = new Client([
            'base_url' => Forge::getBaseUrl(),
        ]);
    }

    public static function sendRequest($method, $url, $params = [])
    {
        if (self::$_client == null) {
            self::init();
        }
        foreach ($params as $key=>$value) {
            echo "{$key} => {$value}\n";
        }
        $res = self::$_client->request($method, $url, [
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
