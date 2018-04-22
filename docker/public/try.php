<?php

  class Menu {
    var $items = [];

    function __construct ($items) {

      foreach ($items as $value) {
        $value = new MenuItem ($value['link_name'], $value['link'], $value['active_pages']);
        $value->showItem();
      }
    }
  }


  class MenuItem {
    var $name;
    var $link;
    var $active_item;
    var $active_pages = [];


    public function __construct ($page_name, $page_link, $active_pages) {
      $this->name = $page_name;
      $this->link = $page_link;
      $this->active_item = $active_pages;
    }


    function is_active () {
      foreach ($this->active_item as $value){
        if ($value == substr ($_SERVER['PHP_SELF'], 1)){
          return true;
          break;
        } else {
        };
      };
    }


    public function showItem () {
      echo $this->is_active() ? "<li><a href= ".$this->link."  class = 'active'> ".$this->name."</a></li>" :
      "<li><a href= ".$this->link."> ".$this->name." </a></li>";
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
            ["link_name" => "О нас", "link" => "/index.php", "active_pages" => ['index.php']],
            ["link_name" => "Магазин", "link" => "/store.php", "active_pages" => ['store.php', 'item.php', 'slider.php', 'order.php', 'confirm.php']],
            ["link_name" => "Блог", "link" => "/blog.php", "active_pages" => ["blog-list.php", 'blogpost.php']],
            ["link_name" => "FAQ", "link" => "/faq.php", "active_pages" => ["faq.php"]],
            ["link_name" => "Контакты", "link" => "/contacts.php", "active_pages" => ["contacts.php"]],
            ["link_name" => "Отзывы", "link" => "/reviews.php", "active_pages" => ["reviews.php"]],
            ["link_name" => "Партнеры", "link" => "/partners.php", "active_pages" => ["partners.php"]]
          ]);
           ?>
        </ul>
    </nav>
  </div>
</header>
</body>
</html>
