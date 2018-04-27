<?php

  class Menu {
    var $items = [];

    function __construct ($items) {

      foreach ($items as $value) {
        $this->items[] = new MenuItem ($value['link_name'], $value['link'], $value['active_pages']);
      }
    }

    function __toString () {
      $content = '';
      foreach ($this->items as $value) {
        $content .= $value->showItem();
      }
      return $content;
    }
  }
?>
