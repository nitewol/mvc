
  <h2>List pages</h2>
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
 
