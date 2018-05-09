<?php

use Symfony\Component\Yaml\Yaml;

$value_page = Yaml::parse(file_get_contents(__DIR__ . '/router.yml'));
$pages = new Router($value_page);

$value_menu = Yaml::parse(file_get_contents(__DIR__ . '/menu.yml'));
$menu = new Menu($value_menu);
