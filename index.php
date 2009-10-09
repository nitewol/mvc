<?php

$mysqli = new MySQLi("localhost","sonya","sonyasmith","sonya");

if(isset($_GET['create-new'])){
  $mysqli->query("insert into pages (title, body) values ('new title','new body')");
  header("Location: /");
}

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
  
  <a href="/?create-new=1">Create new page</a>
  
  <ul>
  <?php foreach($pages as $page):?>
  <li><?= $page['title'] ?>
  <a href="page.php?id=<?= $page['id']?>">View</a>
  
  </li>
  
  <?php endforeach ?>
  
  
  
  
  </ul>
  
  
  
  
  
  
  </body>




</html>
