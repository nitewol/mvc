<?php

class Dispatcher {

   function dispatch(){
  
    $router = new Router(Request::instance());
    $array  = $router->route();
    extract($array);
    
    // instantiates the controller and runs the action (method) we got from above
    $controller = new $controller();
    $controller->$action();
  }

}



?>
