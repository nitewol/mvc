<?php



/*

if(isset($_GET['create-new'])){
  $pm->insert();
  header("Location: /");
}

if(isset($_GET['delete-page'])){
  $pageid = $_GET['delete-page'];
  $pm->delete($pageid);
}


*/

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
    <a href="edit-page.php?id=<?= $page['id']?>">Edit</a>  
  <a href="/?delete-page=<?= $page['id']?>">Delete</a>
  
  </li>
  
  <?php endforeach ?>
  
  
  
  
  </ul>
  
  
  
  
  
  
  </body>




</html>
