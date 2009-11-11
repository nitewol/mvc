<?php

function __autoload($class){
  require 'php/'.strtolower($class).'.php';
}

$req = Request::instance();
$uri =  $req->get_uri();
$controllerclass = '';
$explodeduri = explode('/',$uri);
$controllerclass = $explodeduri[1];
$controllerclass = ucwords($controllerclass) . 'Controller';


//echo $controllerclass;
$action = explode('?',$explodeduri[2]);
$action = $action[0];

//echo "::$action";

Config::instance( 'config.ini' );

$controller = new $controllerclass();
$controller->$action();


?>




