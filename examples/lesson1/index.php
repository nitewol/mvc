<?php
  $mysqli = new MySQLi( 'localhost', 'sonya', 'sonyasmith', 'sonya' );
  
  //user clicks 'create new page'  
  if ( isset( $_GET['new-page'] ) ) {
    $now = time();
    $mysqli->query( "insert into pages (title, body, created_at, modified_at) values ('New Page Title', 'New Page Body', $now, $now)" );
		//refresh the page
    header( 'Location: /' );
  }
  
  //user clicks 'delete'
  if ( isset( $_GET['delete-page'] ) ) {
    $id = $_GET['delete-page'];
    $mysqli->query( "delete from pages where id=$id" );
		//refresh the page
    header( 'Location: /' );
  }
  
  
  //get all pages for display
  $result = $mysqli->query( 'select * from pages' );
  $pages = array();
  
  while( $page = $result->fetch_assoc() ) {
    $pages[] = $page;
  }
?>
<html>
  <head>
  </head>
  <body>
    <h1>Pages</h1>

    <a href='/?new-page=1'>Create New Page</a>
    
    <ul>
    <?php foreach( $pages as $page ) : ?>
      <li><?= $page['title'] ?> | 
          <a href='page.php?id=<?= $page['id'] ?>'>View</a> | 
          <a href='edit-page.php?id=<?= $page['id'] ?>'>Edit</a> |
          <a href='/?delete-page=<?= $page['id'] ?>'>Delete</a>
      </li>
    <?php endforeach ?>
    </ul>
        
  </body>
</html>
