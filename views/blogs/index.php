
  <h2>List pages</h2>
  <a href="<?= $path_prefix ?>/pages/create">Create new page</a>
  <ul>
  <?php foreach($blogs as $blog):?>
  <li><?= $blog['title'] ?>
  <a href="<?= $path_prefix ?>/blogs/show?id=<?= $blog['id']?>">View</a>
    <a href="<?= $path_prefix ?>/blogs/edit?id=<?= $blog['id']?>">Edit</a>  
  <a href="<?= $path_prefix ?>/blogs/delete?id=<?= $blog['id']?>">Delete</a>
  
  </li>
  <?php endforeach ?>
  </ul>
