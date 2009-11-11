<?=$helper->doctype();?>
<html>

  <head>
    <title><?= $page['title'] ?></title>
    <?=$helper->style_sheet_link_tag(array('style','typography')) ?>
  </head>
  
  <body>
  <div id='wrapper'>
  <? $helper->render_partial('header'); ?>
  
  <? include $view; ?>
  
  <? $helper->render_partial('footer'); ?>
  </div>

  </body>
</html>