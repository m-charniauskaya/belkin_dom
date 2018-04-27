<?php
$menu = new Menu([
  ["link_name" => "О нас", "link" => "/index.php", "active_pages" => ['index.php']],
  ["link_name" => "Магазин", "link" => "/store.php", "active_pages" => ['store.php', 'item.php', 'slider.php', 'order.php', 'confirm.php']],
  ["link_name" => "Блог", "link" => "/blog-list.php", "active_pages" => ["blog-list.php", 'blogpost.php']],
  ["link_name" => "FAQ", "link" => "/faq.php", "active_pages" => ["faq.php"]],
  ["link_name" => "Контакты", "link" => "/contacts.php", "active_pages" => ["contacts.php"]],
  ["link_name" => "Отзывы", "link" => "/reviews.php", "active_pages" => ["reviews.php"]],
  ["link_name" => "Партнеры", "link" => "/partners.php", "active_pages" => ["partners.php"]]
]);
 ?>
