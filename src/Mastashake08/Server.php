<?php
namespace Mastashake08;
use Mastashake08\ApiRequestor;
use Mastashake08\Forge;
class Server
{


public static function all(){
  return ApiRequestor::sendRequest('GET',Forge::getBaseUrl());
}

public static function retrieve($id){
  return ApiRequestor::sendRequest('GET',Forge::getBaseUrl()."/{$id}");
}

public static function create($params){
  return ApiRequestor::sendRequest('POST',Forge::getBaseUrl(),$params);
}

public static function update($id,$params){
  return ApiRequestor::sendRequest('PUT',Forge::getBaseUrl()."/{$id}",$params);
}

public static function updatePassword($id,$params){
  return ApiRequestor::sendRequest('PUT',Forge::getBaseUrl()."/{$id}/database-password",$params);
}

public static function delete($id){
  return ApiRequestor::sendRequest('DELETE',Forge::getBaseUrl()."/{$id}");
}

public static function rebootServer($id){
  return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$id}/reboot");
}

public static function revoke($id){
  return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$id}/revoke");
}

public static function reconnect($id){
  return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$id}/reconnect");
}

public static function reactivate($id){
  return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$id}/reactivate");
}
}
