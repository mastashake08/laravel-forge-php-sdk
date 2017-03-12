<?php

namespace Mastashake08\Forge;

class Forge
{
    /**
     * This is the your forge api token, you can generate one here
     * @url https://forge.laravel.com/user/profile#/api
     * @var
     */
    public static $apiKey;

    /**
     * This is the base API URL
     * @var string
     */
    public static $apiBase = 'https://forge.laravel.com/api/v1/';

    /**
     * Return the api key
     * @return string
     */
    public static function getApiKey()
    {
        return self::$apiKey;
    }

    /**
     * Set the api key
     * @param $apiKey
     */
    public static function setApiKey($apiKey)
    {
        self::$apiKey = $apiKey;
    }

    /**
     * Get the base URL
     * @return string
     */
    public static function getBaseUrl()
    {
        return self::$apiBase;
    }
}
