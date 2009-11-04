<html>

  <head>
    <title><?= $page['title'] ?></title>
    <link rel='stylesheet' type='text/css' href='/css/style.css' />
  </head>
  
  <body>
  <div id='wrapper'>
  <h1><?= $page['title'] ?></h1>
    <div id="page_content">
      <?= $page['body'] ?>
    </div>  
    <a href="/pages/index">index</a>
    <a href="/pages/edit?id=<?=$page['id'] ?>">Edit</a>
  </div>
  </body>
</html>
