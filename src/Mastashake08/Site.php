<?php
namespace Mastashake08;
use Mastashake08\Forge;
use Mastashake08\ApiRequestor;
class Site{
public static function create($id,$params){
  return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$id}/sites",$params);
}

public static function all($id){
  return ApiRequestor::sendRequest('GET',Forge::getBaseUrl()."/{$id}/sites");
}

public static function retrieve($id, $siteId){
  return ApiRequestor::sendRequest('GET',Forge::getBaseUrl()."/{$id}/sites/{$siteId}");
}

public static function update($id, $siteId,$params){
  return ApiRequestor::sendRequest('PUT',Forge::getBaseUrl()."/{$id}/sites/{$siteId}",$params);
}

public static function delete($id, $siteId){
  return ApiRequestor::sendRequest('DELETE',Forge::getBaseUrl()."/{$id}/sites/{$siteId}");
}

public static function balance($id, $siteId){
  return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$id}/sites/{$siteId}/balancing");
}
}
?>
