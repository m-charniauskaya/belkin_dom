<?php

  require __DIR__ . '/../vendor/autoload.php';
  include ("./objMenu.php");

  $page = '';

  switch (substr ( $_SERVER['REQUEST_URI'], 1)) {
    case 'index':
      $page = 'index_main';
      break;
    case 'basket':
      $page = 'basket';
      break;
    case 'blog':
      $page = 'blog-list';
      break;
    case 'faq':
      $page = 'faq';
      break;
    case 'partners':
      $page = 'partners';
      break;
    case 'reviews':
      $page = 'reviews';
      break;
    case 'store':
      $page = 'store';
      break;
    case 'order':
      $page = 'order';
      break;
    case 'contacts':
      $page = 'contacts';
      break;
  };

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>белкин дом</title>
        <link href="./styles/style.css" rel="stylesheet">
    </head>
    <body>
      <?php include ("blocks/header.php"); ?>
      <?php include ($page.'.php'); ?>
      <?php include ("blocks/footer.php");?>
    </body>
</html>
