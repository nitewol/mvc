<?php

class PagesController {
  
  private $page_mapper;
  
  function __construct(){
  
    $this->page_mapper = new PageMapper();
  }

  function render($view,$array){
    extract($array);
    $helper = new Helper();
    $view = "views/$view.php";
    include 'views/layout_page.php';
  }

  function show(){
    $pm = $this->page_mapper;
    $id = Request::instance()->get_param('id');
    $data = array(
      'id' => Request::instance()->get_param('id'),
      'page' => $pm->find( $id )
    );  
    $this->render('page', $data);
  }
  
  function index(){
    $pm = $this->page_mapper;
    $data = array(
     'pages' => $pm->find_all(),
    );
    $this->render('index', $data);
  }
  
  function edit(){
    
    if(Request::instance()->get_param('submit')!== null){
      $this->page_mapper->update(Request::instance()->get_params());
      $id = Request::instance()->get_param('id');
      header("Location: /pages/show?id=$id");
     }
     
    $data = array( 'page' => $this->page_mapper->find( Request::instance()->get_param('id')) );
    $this->render('edit-page', $data);

  
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
