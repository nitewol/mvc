<?php

class PagesController extends Controller {
  
  private $page_mapper;

  function __construct(){
  
    $this->page_mapper = new PageMapper();
    parent::__construct();
  }

  function template_dir(){
    return 'pages';  
  }
 /**
  * Get pages/show/
  *
  * Shows a page
  */
  function show(){
    $pm = $this->page_mapper;
    $id = Registry::get('Request')->get_param('id');
    $array = array(
      'id' => Registry::get('Request')->get_param('id'),
      'page' => $pm->find( $id )
    );  
    $this->render('page', $array);
  }

  /**
   * Get pages/index/
   *
   * Lists pages (entries)
   */
  function index(){
    $pm = $this->page_mapper;
    $data = array(
     'pages' => $pm->find_all(),
    );
    $this->render('index', $data);
  }
  /**
   * Get | Post pages/edit?id=
   * 
   * Shows page for editing or  submits depending if submit is set.
   */
  function edit(){
    if(Registry::get('Request')->get_param('submit')!== null){
      $this->page_mapper->update(Registry::get('Request')->get_params());
      $id = Registry::get('Request')->get_param('id');
      header("Location: /pages/show?id=$id");
     }
     
    $data = array( 'page' => $this->page_mapper->find( Registry::get('Request')->get_param('id')) );
    $this->render('edit-page', $data);
  }
   /**
    * Get pages/delete?id=
    *
    * Deletes page
    */
  function delete(){
    $pm = $this->page_mapper;
    $id = Registry::get('Request')->get_param('id');
    $pm->delete( $id );
    header("Location: /pages/index");
  }
   /**
    * Get pages/create/
    *
    * Creates a new page
    */
  function create(){
    $pm = $this->page_mapper;
    $pm->insert();
    if (Registry::get('Request')->is_ajax()) {
      $data = array( 'new_page_id' => $pm->insert_id() );
      $json = json_encode($data);
      echo $json;
     } else {
      header("Location: /pages/index");
    }
  }
  
}

?>
