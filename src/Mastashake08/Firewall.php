<?php
namespace Mastashake08\Forge;
use Mastashake08\Forge\ApiRequestor;
use Mastashake08\Forge\Forge;
class Firewall{

  public static function create($id,$params){
    return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$id}/firewall-rules",$params);
  }

  public static function list($id){
    return ApiRequestor::sendRequest('GET',Forge::getBaseUrl()."/{$id}/firewall-rules");
  }

  public static function retrieve($id,$ruleId){
    return ApiRequestor::sendRequest('GET',Forge::getBaseUrl()."/{$id}/firewall-rules/{$ruleId}");
  }

  public static function delete($id,$ruleId){
    return ApiRequestor::sendRequest('DELETE',Forge::getBaseUrl()."/{$id}/firewall-rules/{$ruleId}");
  }
}
 ?>