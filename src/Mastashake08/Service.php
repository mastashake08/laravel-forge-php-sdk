<?php
namespace Mastashake08;
use Mastashake08\ApiRequestor;
use Mastashake08\Forge;
class Service{

  public static function rebootMysql($id){
    return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$id}/mysql/reboot");
  }

  public static function stopMysql($id){
    return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$id}/mysql/stop");
  }

  public static function rebootNginx($id){
    return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$id}/nginx/reboot");
  }

  public static function stopNginx($id){
    return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$id}/nginx/stop");
  }

  public static function rebootPostgres($id){
    return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$id}/postgres/reboot");
  }

  public static function stopPostgres($id){
    return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$id}/postgres/stop");
  }
}

 ?>
