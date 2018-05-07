<?php

  use PHPUnit\Framework\TestCase;

  class RouterTest extends TestCase
  {


    public function testGetRouteTemplate () {

      $page = new Router(['index' => 'index_main']);
      try {
        $_SERVER['REQUEST_URI'] = '/index';
        $this->assertEquals ('index_main', $page->getRouteTemplate());
      } catch (Exception $e){}
        
      try {
        $_SERVER['REQUEST_URI'] = '/store';
        $this->assertNull ($page->getRouteTemplate());
      } catch (Exception $e){}

    }
  }
