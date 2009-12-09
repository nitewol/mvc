<?php

class Dispatcher {

  private static $instance;
  
  static function instance(){
    if(! isset(self::$instance)){
     self::$instance = new Dispatcher();
    }

    return self::$instance;
  }


  private function __construct(){


  }



  function dispatch(){
  
    // gets an instance of our request singleton
    $req = Request::instance();
    // gets the uri part of the req (to examine it below)
    $uri =  $req->get_uri();

    //  chunk uri into bits to get controller name (assumed 2nd bit of uri).
    $controllerclass = '';
    $explodeduri = explode('/',$uri);
    $controllerclass = $explodeduri[1];
    $controllerclass = ucwords($controllerclass) . 'Controller';


    // get bit before query string, which we use as the action for the controller.
    $action = explode('?',$explodeduri[2]);
    $action = $action[0];

    // loads config file into config singleton (per-computer db access etc)
    Config::instance( 'config.ini' );

    // instantiates the controller and runs the action (method) we got from above
    $controller = new $controllerclass();
    $controller->$action();

  
  }

}



?>
