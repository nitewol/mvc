<html>

  <head>
    <title>Edit page <?= $page['title']?>  </title>
    <link rel='stylesheet' type='text/css' href='/css/style.css' />
  </head>

  <body>
  <div id='wrapper'>
  
    <h1>Edit page <?= $page['title']?> </h1>
  
    <a href="/pages/index">Index</a>
    <a href="/pages/show?id=<?= $page['id']?>">View</a>
  
    <form method="post" action="/pages/edit?id=<?= $page['id'] ?>">
      <label>Title</label><br />
      <input type="text" name="title" value="<?= $page['title']?>" />
      <label>Body</label><br />
      <textarea name="body"><?= $page['body']?></textarea>
      <input type="hidden" name="id" value="<?= $page['id']?>" />
      <input type="submit" name="submit" value="Update">
    </form>
    
  </div>
  </body>
</html>
