<?php

  require __DIR__ . '/../vendor/autoload.php';
  include ("./objMenu.php");
  include ("./objRouter.php");

  class Router {
    public $pages_names = [];

    function __construct ($items) {

      foreach ($items as $key =>$value) {
        $this->pages_names[$key] = $value;
      }
    }

    function getRouteTemplate () {
      foreach ($this->pages_names as $key => $value) {

        if ($key == substr ( $_SERVER['REQUEST_URI'], 1)) {
          echo $value;
          return $value;
          break;
        } else {}
      };
    }

  }


/*  $page = '';

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
  }; */

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>белкин дом</title>
        <link href="./styles/style.css" rel="stylesheet">
    </head>
    <body>
      <?php include ("blocks/header.php"); ?>
      <?php $pages = new Router([
        'index' => 'index_main.php',
        'blog' => 'blog-list.php',
        'store' => 'store.php',
        'try.php' => 'try.php'
      ]);
      ?>
      <?php //include ($pages->getRouteTemplate());?>
      <?php include ("blocks/footer.php");?>
    </body>
</html>
