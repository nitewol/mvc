<?php

class PagesController {

  function show(){
    
    $pm = new PageMapper();
    
    $page = $pm->find( Request::instance()->get_param('id'));
    include 'views/page.php';
  }







}

?>
