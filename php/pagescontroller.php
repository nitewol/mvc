<?php

class PagesController {
  
  private $page_mapper;
  
  function __construct(){
  
    $this->page_mapper = new PageMapper();
  }

  function show(){
    $pm = $this->page_mapper;
    $page = $pm->find( Request::instance()->get_param('id'));
    include 'views/page.php';
  }
  
  function index(){
    $pm = $this->page_mapper;
    $pages = $pm->find_all();
    include 'views/index.php';
  }
}

?>
