<?php

class Registry{

  private static $objects;  // array of our singletons
  
  static function get($key){
    if(! isset(self::$objects[$key])){
      self::$objects[$key] = new $key();
    }
  
    return self::$objects[$key];
  }  
}


?>
