<?php

  use PHPUnit\Framework\TestCase;

  class MenuTest extends TestCase
  {
    public function testEmptyMenu () {
      $menu = new Menu([]);
      $this->assertEquals ('', (string) $menu);
    }

    public function testOneMenuItem () {
      $menu = new Menu([["link_name" => "О нас", "link" => "/index.php", "active_pages" => ['index.php']]]);
      $this->assertEquals ('<li><a href="/index.php">О нас</a></li>', (string) $menu);
    }
  }
