<?php
$menu = new Menu([
  ["link_name" => "О нас", "link" => "/index", "active_pages" => ['index']],
  ["link_name" => "Магазин", "link" => "/store", "active_pages" => ['store', 'item', 'slider', 'order', 'confirm']],
  ["link_name" => "Блог", "link" => "/blog", "active_pages" => ["blog", 'blogpost']],
  ["link_name" => "FAQ", "link" => "/faq", "active_pages" => ["faq"]],
  ["link_name" => "Контакты", "link" => "/contacts", "active_pages" => ["contacts"]],
  ["link_name" => "Отзывы", "link" => "/reviews", "active_pages" => ["reviews"]],
  ["link_name" => "Партнеры", "link" => "/partners", "active_pages" => ["partners"]]
]);
 ?>
