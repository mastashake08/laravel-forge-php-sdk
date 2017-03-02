<?php
namespace Mastashake08\Forge;
use Mastashake08\Forge\Forge;
use Mastashake08\Forge\ApiRequestor;
class Recipe{
  public static $_url = "https://forge.laravel.com/api/v1/recipes";
public static function create($params){
  return ApiRequestor::sendRequest('POST',self::$_url,$params);
}

public static function all(){
  return ApiRequestor::sendRequest('GET',self::$_url);
}

public static function retrieve($id){
  return ApiRequestor::sendRequest('GET',self::$_url."/{$id}");
}

public static function update($id,$params){
  return ApiRequestor::sendRequest('PUT',self::$_url."/{$id}",$params);
}

public static function delete($id){
  return ApiRequestor::sendRequest('DELETE',self::$_url."/{$id}");
}

public static function run($id){
  return ApiRequestor::sendRequest('POST',self::$_url."/{$id}/run");
}
}
?>
