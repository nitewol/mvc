<?php

$mysqli = new MySQLi("localhost","sonya","sonyasmith","sonya");
$id = $_GET['id'];
$result = $mysqli->query("select * from pages where id = $id");
$page = $result->fetch_assoc();

?>

<html>

  <head>
    <title><?= $page['title'] ?>
    </title>
    
  
  </head>
  
  <body>
  
  <h1><?= $page['title'] ?></h1>
  
  
  <div id="page_content">
    <?= $page['body'] ?>
    
    </div>  
    
    <a href="/">index</a>
  </body>




</html>