<?php
  //connect to the db
  $mysqli = new MySQLi( 'localhost', 'sonya', 'sonyasmith', 'sonya' );
  
  //get the id from $_GET
  $id = $_GET['id'];
  
  //build the query
  $query = "select * from pages where id=$id";
  
  //get the result into an array
  $result = $mysqli->query( $query );
  $page = $result->fetch_assoc();

?>
<html>

  <head>
    <title><?= $page['title'] ?></title>
  </head>
  
  <body>
  
    <h1><?= $page['title'] ?></h1>


    <div id='page-content'>
      <?= $page['body'] ?>
    </div>
    
    <a href='/edit-page.php?id=<?= $page['id'] ?>'>Edit This Page</a> | <a href='/'>Index</a>
    
  </body>

</html>

