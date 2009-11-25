
  <h2>List pages</h2>
  <a id="create_new_page_link" href="<?= $path_prefix ?>/pages/create">Create new page</a>
  <ul id="pages_list">
  <?php foreach($pages as $page):?>
  <li><?= $page['title'] ?>
  <a href="<?= $path_prefix ?>/pages/show?id=<?= $page['id']?>">View</a>
    <a href="<?= $path_prefix ?>/pages/edit?id=<?= $page['id']?>">Edit</a>  
  <a href="<?= $path_prefix ?>/pages/delete?id=<?= $page['id']?>">Delete</a>
  
  </li>
  <?php endforeach ?>
  </ul>
 
