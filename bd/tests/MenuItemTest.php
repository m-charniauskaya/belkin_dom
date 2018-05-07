<?php

  use PHPUnit\Framework\TestCase;

  class MenuItemTest extends TestCase
  {
    public function testIs_active () {
      $item = new MenuItem ("О нас", "/index", ['index']);
      $_SERVER['REQUEST_URI'] = '/index';
      $this->assertTrue ($item->is_active());
    }

  }
