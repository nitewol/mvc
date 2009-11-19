<?php

class BlogsController extends Controller {

  private $blog_mapper;

  function __construct(){
    $this->blog_mapper = new BlogMapper();
    parent::__construct();
  }
  
  function template_dir(){
    return 'blogs';  
  }
  
  
	function show() {
	}
	
	function index(){
    $bm = $this->blog_mapper;
    $data = array(
     'blogs' => $bm->find_all(),
    );
    $this->render('index', $data);
  }
  
	function edit() {
	}
	function delete() {
	}
	function create() {
	}
}
?>
