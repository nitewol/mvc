<?php
 /**
  * Superclass for all other controllers.
  */
abstract class Controller {

  protected $path_prefix;
  
  // template_dir()  is implemented in subclasses to find templates (for that sort of data)
  abstract function template_dir();

  function __construct(){
      $this->path_prefix = Config::instance()->path_prefix();
  }
 /**
  * Builds pages from fragments
  * 
  * @param $view string the template to render
  * @param $array array the variables required in the template (are extracted)
  */
  protected function render($view,$array){
    extract($array);
    $helper = new Helper(); // makes css tags and js tags etc 
    $view = "views/{$this->template_dir()}/$view.php";
    $path_prefix = $this->path_prefix;
    include 'views/layout.php';
  }
  
}

?>
