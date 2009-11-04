<html>
  <head>
    <title> List pages  </title>
    <link rel='stylesheet' type='text/css' href='/css/style.css' />    
  </head>
  <body>
  <div id='wrapper'>
  <h1>List pages</h1>
  <a href="/pages/create">Create new page</a>
  <ul>
  <?php foreach($pages as $page):?>
  <li><?= $page['title'] ?>
  <a href="/pages/show?id=<?= $page['id']?>">View</a>
    <a href="/pages/edit?id=<?= $page['id']?>">Edit</a>  
  <a href="/pages/delete?id=<?= $page['id']?>">Delete</a>
  
  </li>
  <?php endforeach ?>
  </ul>
  </div>
  </body>

</html>
