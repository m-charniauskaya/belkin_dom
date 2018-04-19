<?php

  class Menu {
    var $items = [];

    function __construct ($items) {

      foreach ($items as $value) {
        $value = new MenuItem ($value['link_name'], $value['link']);
        $value->showItem();
      }
    }
  }


  class MenuItem {
    var $name;
    var $link;
    var $active_item;


    function MenuItem ($page_name, $page_link) {
      $this->name = $page_name;
      $this->link = $page_link;
    }


    public function showItem () {
      echo "<li><a href= ".$this->link."> ".$this->name." </a></li>";
    }

  };

?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>белкин дом</title>
        <link href="./styles/style.css" rel="stylesheet">
    </head>
    <body>
    <header>

<div class="header-content">
    <a href="/index.html"><img src="./img/logo.png"></a>
    <div id="special-nav">
        <a a href="/basket.html" id="basket">Корзина(0)</a>
        <a href="#" class="active">
            Ru
        </a>
        <a href="#">
            En
        </a>
    </div>

    <nav id="main-menu">
        <ul>
          <?php
          $menu = new Menu([
            ["link_name" => "О нас", "link" => "/index.php"],
            ["link_name" => "Магазин", "link" => "/store.php"],
            ["link_name" => "Блог", "link" => "/blog.php"],
            ["link_name" => "FAQ", "link" => "/faq.php"],
            ["link_name" => "Контакты", "link" => "/contacts.php"],
            ["link_name" => "Отзывы", "link" => "/reviews.php"],
            ["link_name" => "Партнеры", "link" => "/partners.php"]
          ]);
           ?>
        </ul>
    </nav>
  </div>
</header>
</body>
</html>
