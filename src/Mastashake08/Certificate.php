<?php
namespace Mastashake08\Forge;
use Mastashake08\Forge\Forge;
use Mastashake08\Forge\ApiRequestor;
class Certificate{
public static function create($id,$siteId,$params){
  return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$id}/sites/{$siteId}/certificates",$params);
}

public static function all($id,$siteId){
  return ApiRequestor::sendRequest('GET',Forge::getBaseUrl()."/{$id}/sites/{$siteId}/certificates");
}

public static function retrieve($id, $siteId){
  return ApiRequestor::sendRequest('GET',Forge::getBaseUrl()."/{$id}/sites/{$siteId}/certificates");
}

public static function update($id, $siteId,$params){
  return ApiRequestor::sendRequest('PUT',Forge::getBaseUrl()."/{$id}/sites/{$siteId}",$params);
}

public static function delete($id, $siteId,$certId){
  return ApiRequestor::sendRequest('DELETE',Forge::getBaseUrl()."/{$id}/sites/{$siteId}/certificates/{$certId}");
}


public static function letsEncrypt($id, $siteId){
  return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$id}/sites/{$siteId}/letsencrypt",$params);
}

public static function getSigningRequest($serverId,$siteId,$id){
  return ApiRequestor::sendRequest('GET',Forge::getBaseUrl()."/{$serverId}/sites/{$siteId}/certificates/{$id}/csr");
}

public static function deleteRequest($serverId,$siteId,$id){
  return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$serverId}/sites/{$siteId}/certificates/{$id}/install",$params);
}
}
?>
