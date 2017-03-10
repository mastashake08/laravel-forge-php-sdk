<?php

namespace Mastashake08\Forge;

class Forge
{
    public static $apiKey;
    public static $apiBase = 'https://forge.laravel.com/api/v1/servers';

    public static function getApiKey()
    {
        return self::$apiKey;
    }

    public static function setApiKey($apiKey)
    {
        self::$apiKey = $apiKey;
    }

    public static function getBaseUrl()
    {
        return self::$apiBase;
    }
}
