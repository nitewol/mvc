<?php

class PagesController {
  
  private $page_mapper;
  
  function __construct(){
  
    $this->page_mapper = new PageMapper();
  }

  function show(){
    $pm = $this->page_mapper;
    $id = Request::instance()->get_param('id');
    $page = $pm->find( $id );
    include 'views/page.php';
  }
  
  function index(){
    $pm = $this->page_mapper;
    $pages = $pm->find_all();
    include 'views/index.php';
  }
  
  function edit(){
    
    if(Request::instance()->get_param('submit')!== null){
      $this->page_mapper->update(Request::instance()->get_params());
      $id = Request::instance()->get_param('id');
      header("Location: /pages/show?id=$id");
     }
    $page = $this->page_mapper->find( Request::instance()->get_param('id'));
    include 'views/edit-page.php';
  
  }
  
  
  function delete(){
    $pm = $this->page_mapper;
    $id = Request::instance()->get_param('id');
    $pm->delete( $id );
    header("Location: /pages/index");
  }
  
  function create(){
    $pm = $this->page_mapper;
    $pm->insert();
    header("Location: /pages/index");
  }
  
}

?>
