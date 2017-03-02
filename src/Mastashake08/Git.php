<?php
namespace Mastashake08\Forge;
use Mastashake08\Forge\Forge;
use Mastashake08\Forge\ApiRequestor;
class Git{
public static function install($id,$siteId,$params){
  return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$id}/sites/{$siteId}/git",$params);
}

public static function uninstall($id,$siteId){
  return ApiRequestor::sendRequest('DELETE',Forge::getBaseUrl()."/{$id}/sites/{$siteId}/git");
}


}
?>
