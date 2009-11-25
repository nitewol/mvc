<?php

class Request {

  private $method;
  private $uri;
  private $params;
  private $fields = array('method','uri','params');
  
  static function instance(){
    if(! isset(self::$instance)){
      self::$instance = new Request();
    }
    return self::$instance;
  }
  
  private static $instance;
  
  private function  __construct(){
  
    $this->uri = $_SERVER['REQUEST_URI'];
    $this->method = $_['REQUEST_METHOD'];
    $this->params = $_REQUEST;
  }
  
  function get_method(){
    return $this->method;
  }
  
  function get_uri(){
    return $this->uri;
  }
  
  function get_param($key){
    return $this->params[$key];
  }
 
  function  get_params(){
    return $this->params;
  }
  
  function is_ajax(){
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
  }
  

}




?>
