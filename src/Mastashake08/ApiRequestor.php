<?php
namespace Mastashake08;
use Mastashake08\Forge;
use GuzzleHttp\Client;
class ApiRequestor{

  private static $_client;

  public function __construct(){}
  private static function init(){
    self::$_client = new Client([
      'base_url' => Forge::getBaseUrl()
    ]);
  }
  public static function sendRequest($method, $url, $params = []){
    if(self::$_client == null){
      self::init();
    }
    $res = self::$_client->request($method, $url, [
      'headers' => ['Authorization' => 'Bearer '.Forge::getApiKey()],
      'form_data' => $params
    ]);
    return $res->getBody();
  }

  }


 ?>
