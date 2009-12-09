<?php
/**
 * Autoloads classes 
 *
 * Looks for an eponymous (lc) class file in the /php/ dir 
 * 
 * @param $class string the class name
 */
function sonya_cms_autoload($class){
  require 'php/'.strtolower($class).'.php';
}

spl_autoload_register('sonya_cms_autoload');

Registry::get('Dispatcher')->dispatch();



?>




