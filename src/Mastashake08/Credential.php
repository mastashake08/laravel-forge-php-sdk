<?php
namespace Mastashake08\Forge;
use Mastashake08\Forge\Forge;
use Mastashake08\Forge\ApiRequestor;
class Credential{
  public static $_url = "https://forge.laravel.com/api/v1/credentials";


public static function all(){
  return ApiRequestor::sendRequest('GET',self::$_url);
}

}
?>
