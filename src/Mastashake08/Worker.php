<?php
namespace Mastashake08\Forge;
use Mastashake08\Forge\Forge;
use Mastashake08\Forge\ApiRequestor;

class Worker{

  public static function create($serverId,$siteId,$params){
    return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$serverId}/sites/{$siteId}/workers",$params);
  }

  public static function all($serverId,$siteId){
    return ApiRequestor::sendRequest('GET',Forge::getBaseUrl()."/{$serverId}/sites/{$siteId}/workers");
  }

  public static function retrieve($serverId, $siteId,$workerId){
    return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$serverId}/sites/{$siteId}/workers/{$workerId}");
  }

  public static function delete($serverId, $siteId,$workerId){
    return ApiRequestor::sendRequest('DELETE',Forge::getBaseUrl()."/{$serverId}/sites/{$siteId}/workers/{$workerId}");
  }

  public static function restart($serverId, $siteId,$workerId){
    return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$serverId}/sites/{$siteId}/workers/{$workerId}/restart");
  }

}

?>
