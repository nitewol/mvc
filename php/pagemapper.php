<?php

class PageMapper extends Mapper {

  function tablename(){
    return 'pages';
  
  }

  function insert(){
    $this->query("insert into pages (title, body) values ('new title','new body')");
  }
  
  function update($page){
    $id = $page['id'];
    $title = $page['title'];
    $body = $page['body'];
    
    $this->query("update pages set title = '$title', body = '$body' where id = $id");
  }  
}


?>
