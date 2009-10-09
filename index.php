<?php

$mysqli = new MySQLi("localhost","sonya","sonyasmith","sonya");

$result = $mysqli->query("select * from pages");

$pages = array();
while($row = $result->fetch_assoc()){
  $pages[] = $row;
}

?>

<html>

  <head>
    <title> List pages  </title>
    
  
  </head>
  
  <body>
  
  <h1>List pages</h1>
  
  <ul>
  <?php foreach($pages as $page):?>
  <li><?= $page['title'] ?></li>
  
  <?php endforeach ?>
  
  
  
  
  </ul>
  
  
  
  
  
  
  </body>




</html>
