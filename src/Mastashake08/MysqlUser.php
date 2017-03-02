<?php
namespace Mastashake08\Forge;
use Mastashake08\Forge\Forge;
use Mastashake08\Forge\ApiRequestor;
class MysqlUser{
public static function create($id,$params){
  return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$id}/mysql-users",$params);
}

public static function all($id){
  return ApiRequestor::sendRequest('GET',Forge::getBaseUrl()."/{$id}/mysql-users");
}

public static function retrieve($id, $userId){
  return ApiRequestor::sendRequest('POST',Forge::getBaseUrl()."/{$id}/mysql-users/{$userId}");
}

public static function update($id, $userId,$params){
  return ApiRequestor::sendRequest('PUT',Forge::getBaseUrl()."/{$id}/mysql-users/{$userId}",$params);
}

public static function delete($id, $userId){
  return ApiRequestor::sendRequest('DELETE',Forge::getBaseUrl()."/{$id}/mysql-users/{$userId}");
}
}
?>
