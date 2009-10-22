
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
    <a href="edit-page.php?id=<?= $id ?>">Edit</a>
  </body>




</html>
