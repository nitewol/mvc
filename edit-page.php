<?php

$mysqli = new MySQLi("localhost","sonya","sonyasmith","sonya");
$id = $_GET['id'];

if(isset($_POST['submit'])){
  $title = $_POST['title'];
  $body = $_POST['body'];
  $mysqli->query("update pages set title = '$title', body = '$body' where id = $id");
  header("Location: page.php?id=$id");
}

$result = $mysqli->query("select * from pages where id = $id");
$page = $result->fetch_assoc();



?>

<html>

  <head>
    <title>Edit page <?= $page['title']?>  </title>
    
  
  </head>
  
  <body>
  
  <h1>Edit page <?= $page['title']?> </h1>
  
  <a href="/">Index</a>
  
  <a href="page.php?id=<?= $page['id']?>">View</a>
  
  <form method="post" action="edit-page.php?id=<?= $page['id'] ?>">
  <label>Title</label><br />
  <input type="text" name="title" value="<?= $page['title']?>" />
  
  <label>Body</label><br />
  <textarea name="body"><?= $page['body']?></textarea>
  
  <input type="submit" name="submit" value="Update">
  </form>
  
  
  
  </body>




</html>
