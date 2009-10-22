<?php

class PageMapper{

  public $mysqli;

  function __construct(){
  
    $this->mysqli = new MySQLi("localhost","sonya","sonyasmith","sonya");
    
  }

  private function query($sql){
    // log the queries to file
    return $this->mysqli->query($sql);
  }  
  
  function find_all(){
    $result_set = $this->query('SELECT * FROM pages');
    $array = array();
    while($page = $result_set->fetch_assoc()){
      $array[] = $page;
    }
    return $array;
  }
  
  function find($id){
    $result = $this->query("SELECT * from pages WHERE id = {$id} LIMIT 1");
    return $result->fetch_assoc();
  }

  function insert(){
    $this->query("insert into pages (title, body) values ('new title','new body')");
    // could return $this->mysqli->insert_id
  }
  
  
    
  function delete($id){
     $this->query("delete from pages where id = $id");
  }
    
  function update($page){
    $id = $page['id'];
    $title = $page['title'];
    $body = $page['body'];
    
    $this->query("update pages set title = '$title', body = '$body' where id = $id");
  
  }  
  

















}


?>
