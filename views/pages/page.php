  <h2><?= $page['title'] ?></h2>
    <div id="page_content">
      <?= $page['body'] ?>
    </div>  
    <a href="<?= $path_prefix ?>/pages/index">index</a>
    <a href="<?= $path_prefix ?>/pages/edit?id=<?=$page['id'] ?>">Edit</a>
    
