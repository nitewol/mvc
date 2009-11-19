<?php

abstract class Controller {

  protected $path_prefix;
  
  abstract function template_dir();
  

  function __construct(){
      $this->path_prefix = Config::instance()->path_prefix();
  }



  function render($view,$array){
    
    extract($array);
    $helper = new Helper();
    $view = "views/{$this->template_dir()}/$view.php";
    $path_prefix = $this->path_prefix;
    include 'views/layout.php';
  }
  
  

  
  
  
}




?>
