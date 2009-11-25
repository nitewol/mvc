<?=$helper->doctype();?>
<html>

  <head>
    <title><?= $page['title'] ?></title>
    <?= $helper->style_sheet_link_tag(array('style','typography')) ?>
    <?= $helper->javascript_include_tag('jquery')?>
  </head>
  
  <body>
  <div id='wrapper'>
  <?php $helper->render_partial('header'); ?>
  
  <?php include $view; ?>
  
  <?php $helper->render_partial('footer'); ?>
  </div>

  </body>
</html>
