<?php

class RouterException extends Exception {};

class Router {
  public $pages = [];

  function __construct ($items) {

    foreach ($items as $key =>$value) {
      $this->pages[$key] = $value;
    }
  }

  function getRouteTemplate () {
    foreach ($this->pages as $key => $value) {

      if ($key == substr ( $_SERVER['REQUEST_URI'], 1)) {
        return $value;
        break;
      } else {}
    };
  }
}
