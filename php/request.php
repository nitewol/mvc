<?php

/**
 * Encapsulates details of the request (url + method (get/post/etc) + query string)
 */
class Request {

  private $method;
  private $uri;
  private $params;
  private $fields = array('method','uri','params');
  
  
  /**
   * Instantiates variables about the request.
   */
  function  __construct(){
  
    $this->uri = $_SERVER['REQUEST_URI'];
    $this->method = $_['REQUEST_METHOD'];
    $this->params = $_REQUEST;
  }
  
  // returns http method of the req (get, post, etc)
  function get_method(){
    return $this->method;
  }
  
  function get_uri(){
    return $this->uri;
  }
  
  //$this->params holds $_REQUEST; get which bit you want with $key
  // eg get_param('id')
  // assumes there is only one of key in whole request array, ie, get and post ("overloading").
  function get_param($key){
    return $this->params[$key];
  }
  // gets $_REQUEST
  function  get_params(){
    return $this->params;
  }
  
  // returns true if request is an ajax req. (from jquery)
  function is_ajax(){
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
  }
  

}




?>
