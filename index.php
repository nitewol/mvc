<?php
/**
 * Autoloads classes 
 *
 * Looks for an eponymous (lc) class file in the /php/ dir 
 * 
 * @param $class string the class name
 */
function __autoload($class){
  require 'php/'.strtolower($class).'.php';
}

Dispatcher::instance()->dispatch();

?>




