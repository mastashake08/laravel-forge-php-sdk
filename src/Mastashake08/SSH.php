<?php
namespace Mastashake08\Forge;
use Mastashake08\Forge\Forge;
use Mastashake08\Forge\ApiRequestor;

class SSH{
  public static function create($serverId,$params){
    return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$serverId}/keys",$params);
  }

  public static function all($serverId){
    return ApiRequestor::sendRequest('GET',Forge::getBaseUrl()."/{$serverId}/keys");
  }

  public static function retrieve($serverId, $keyId){
    return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$serverId}/keys/{$keyId}");
  }

  public static function delete($serverId, $keyId){
    return ApiRequestor::sendRequest('DELETE',Forge::getBaseUrl()."/{$serverId}/keys/{$keyId}");
  }
}

?>
