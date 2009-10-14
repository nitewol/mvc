<?php

require 'pagemapper.php';
$id = $_GET['id'];
$pm = new PageMapper();

if(isset($_POST['submit'])){
  $pm->update($_POST);
  header("Location: page.php?id=$id");
}


$page = $pm->find($id);



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
  
  <input type="hidden" name="id" value="<?= $page['id']?>" />
  <input type="submit" name="submit" value="Update">
  </form>
  
  
  
  </body>




</html>
