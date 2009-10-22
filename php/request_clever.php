<?php


class Request {

  private $method;
  private $uri;
  private $params;
  private $fields = array('method','uri','params');
  
  function  __construct(){
  
    $this->uri = $_SERVER['REQUEST_URI'];
    $this->method = $_['REQUEST_METHOD'];
    $this->params = $_REQUEST;
  }
  
  function __call($method,$args){
    if(in_array($this->fields,$method)){
      return $this->$method;
   
    }
  }





}

$obj = new Request();
echo $obj->uri();


?>
