<?php
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
    return $this->is_active() ? "<li><a href= ".$this->link."  class = 'active'> ".$this->name."</a></li>" :
    "<li><a href= ".$this->link."> ".$this->name." </a></li>";
  }

};

?>
