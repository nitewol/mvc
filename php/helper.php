<?php

class Helper {
  private $config;
  function __construct() {
    $this->config = Config::instance();
  }
  function style_sheet_link_tag($array){
    if ( ! is_array($array) ) {
      return "<link rel='stylesheet' type='text/css' href='{$this->config->path_prefix()}/css/$array.css' />\n";
    }
    $tags = '';
    foreach($array as $sheet){
      $tags .= $this->style_sheet_link_tag($sheet);
    }
    return $tags;
  }
  
  function doctype(){
    return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
  
  }
  
  function render_partial($partial){
    include "views/_{$partial}.php";
  }
  
}

?>
