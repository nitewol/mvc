<?php
  class Config {
    private $data = array();
    private static $instance;
    
    private function __construct( $array ) {
      $this->data = $array;
    }
    
    /**
     * Initializes if unset + returns an instance
     *
     * @param $ini_filename string - the filename of the config file to read
     * @return $config Config - the instance of content to return
     */
    static function instance( $ini_filename = null ) {
      if ( (! isset(self::$instance) ) && $ini_filename !== null ) {
        self::$instance = new self( parse_ini_file( $ini_filename ) );
      }
      return self::$instance;
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
