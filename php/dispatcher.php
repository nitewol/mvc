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
  
    // loads config file into config singleton (per-computer db access etc)
    Config::instance( 'config.ini' );

    $router = new Router(Request::instance());
    $array  = $router->route();
    extract($array);
    
    // instantiates the controller and runs the action (method) we got from above
    $controller = new $controller();
    $controller->$action();
  }

}



?>
