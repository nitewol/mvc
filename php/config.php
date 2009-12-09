<?php
  class Config {
    private $data = array();
    private static $instance;
    
    function __construct() {
      $this->data = parse_ini_file('config.ini');
    }
    
    /**
     * Provides access to config data
     *
     * @param $method string - the method that was called on this object
     * @param $args array - any args that were passed in
     * @return $data string - any matching data in $this->data
     */
    function __call( $method, $args ) {
      if ( isset( $args[0] ) ) {
        $this->data[$method] = $args[0];
      }
      return $this->data[$method];
    }
  }
  

