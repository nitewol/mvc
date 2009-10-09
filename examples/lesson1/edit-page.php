<?php
  //connect to the db
  $mysqli = new MySQLi( 'localhost', 'sonya', 'sonyasmith', 'sonya' );
  
  //get the id from $_GET
  $id = $_GET['id'];
  
  //form processing
  if ( isset( $_POST['submit'] ) ) {
    //get the data from post
    $title = $_POST['title'];
    $body = $_POST['body'];
    
    //build the query
    $now = time();
    $query = "update pages set title='$title', body='$body', modified_at=$now where id='$id'";
        
    //update the page
    $mysqli->query( $query );
    
    //redirect to the updated page view
    header( "Location: page.php?id=$id" );
  }
  
  //build the query to find a page
  $query = "select * from pages where id=$id";
  
  //get the result into an array
  $result = $mysqli->query( $query );
  $page = $result->fetch_assoc();
?>
<html>

  <head>
  </head>
 
  <body>
  
    <h1>Edit Page: <?= $page['title'] ?></h1>
    
    <a href='/page.php?id=<?= $page['id'] ?>'>View This Page</a> | <a href='/'>Index</a>
    
    <form method='post' action='edit-page.php?id=<?= $page['id'] ?>'>
      <label for='title'>Title:</label><br />
      <input type='text' name='title' value='<?= $page['title'] ?>' />
      <br />
      <textarea name='body'><?= $page['body'] ?></textarea><br />
      <input type='submit' name='submit' value='Update' />
    
    </form>
    
  </body>
  
</html>
