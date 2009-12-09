<?php

  class Router{

    private $request;
    
    function __construct(Request $request) {
      
      $this->request = $request;
    }
  
    function route(){
  
      // gets the uri part of the req (to examine it below)
      $uri =  $this->request->get_uri();

      //  chunk uri into bits to get controller name (assumed 2nd bit of uri).
      $controller = '';
      $explodeduri = explode('/',$uri);
      $controller = $explodeduri[1];
      $controller = ucwords($controller) . 'Controller';


      // get bit before query string, which we use as the action for the controller.
      $action = explode('?',$explodeduri[2]);
      $action = $action[0];
      
      return array('controller' => $controller, 'action' => $action);
      
    }
  
  
  
  
  
  
  }


?>


