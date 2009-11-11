<?php

abstract class Mapper {

  public $mysqli;

  abstract function tablename();  
  
  
  //we need an array to hold the table fields
  protected $fields = array();
  
  
  function __construct(){
    $config = Config::instance();
    $this->mysqli = new MySQLi(
      $config->db_host(),
      $config->db_user(),
      $config->db_password(),
      $config->db_name()
    );
    
    $result = $this->query("explain {$this->tablename()}");
    while($row = $result->fetch_assoc()){
          $this->fields[] = $row['Field'];
    }
  }
  

  /**
   * Inserts a row into whicheva table
   *
   * TODO: Finish this function! 
   * @param $row array - the row to insert. It is an assoc array.
   */
  /*  
  function insert($row){
    $fields = $this->fields_without_id();
    $clean_row = $this->escape_array($row);
    $quoted_row = $this->quote_array($clean_row);
     
    $query = "insert into {$this->tablename()} ";
    $query .= '( ' . implode(',', $fields) .')' ;
    $query .= "values ( " . implode(',', array_values($quoted_row));
    // string glue, array pieces : implode()
  }
  */
  
  /**
   * Returns fields without the id 
   *
   * @return $fields array - array of fields without the id
   */
  private function fields_without_id(){
    $fields = array();
    foreach($this->fields as $field){
      if($field != 'id'){
        $fields[] = $field;
      }
    }
   return $fields;
  }
  
  private function quote($string){
    return "'$string'";
  
  }

  private function escape($string){
    return $this->mysqli->escape_string($string);
  
  }  
  
    
  private function escape_array($array){
    $escaped = array();
    foreach($array as $key => $value){
      $escaped[$key] = $this->escape($value);
    }
   return $escaped;    
  
  }  
    
  private function quote_array($array){
    $quoted = array();
    foreach($array as $key => $value){
      $quoted[$key] = $this->quote($value);
    }
   return $quoted; 
  }

  
  
  protected function query($sql){
    // log the queries to file
    return $this->mysqli->query($sql);
  }  


 function find($id){
    $table = $this->tablename();
    $result = $this->query("SELECT * from {$table} WHERE id = {$id} LIMIT 1");
    return $result->fetch_assoc();
  }
  
    
  function find_all(){
    $table = $this->tablename();
    $result_set = $this->query("SELECT * FROM {$table}");
    $array = array();
    while($row = $result_set->fetch_assoc()){
      $array[] = $row;
    }
    return $array;
  }


 function delete($id){
     $this->query("delete from {$this->tablename()} where id = $id");
  }
  
  
  
}

?>
