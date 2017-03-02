<?php
namespace Mastashake\Forge;

class Forge
{

public static $apiKey;
public statuc $apiBase = 'https://forge.laravel.com/api/v1/servers';

public static function getApiKey(){
return self::$apiKey;
}

public static function setApiKey($apiKey){
self::$apiKey = $apiKey;
}

}
