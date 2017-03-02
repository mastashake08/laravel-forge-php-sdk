<?php
namespace Mastashake08\Forge\Error;
use Exception;

abstract class Base extends Exception{
public function __construct($message, $httpStatus = null, $httpBody = null,$httpHeaders = null){
parent::__construct($message);
$this->httpStatus = $httpStatus;
$this->httpBody = $httpBody;
$this->httpHeaders = $httpHeaders;
}
}
