<?php
namespace Mastashake08;
use Mastashake08\Forge;
use Mastashake08\ApiRequestor;
class Daemon{
  public static function create($id,$params){
    return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$id}/daemons",$params);
  }

  public static function all($id){
    return ApiRequestor::sendRequest('GET',Forge::getBaseUrl()."/{$id}/daemons");
  }

  public static function delete($serverId, $daemonId){
    return ApiRequestor::sendRequest('DELETE',Forge::getBaseUrl()."/{$serverId}/daemons/{$daemonId}");
  }

  public static function restart($serverId, $daemonId){
    return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$serverId}/daemons/{$daemonId}/restart");
  }
}
?>
