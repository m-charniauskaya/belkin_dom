<?php
$args = array();

function is_active ($page, $args) {
  foreach ($args as $value){
    var_dump($args);
    if ($value == $page){
      echo 'correct';

    } else {
      echo 'not';
    };
  };
};

is_active('lala', ['all', 'noll', 'lala']);

?>
