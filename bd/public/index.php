<?php

  require __DIR__ . '/../vendor/autoload.php';
  include ("./objMenu.php");
  include ("./objRouter.php");

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>белкин дом</title>
        <link href="./styles/style.css" rel="stylesheet">
    </head>
    <body>
      <?php include ("blocks/header.php"); ?>
      <?php include ($pages->getRouteTemplate().'.php'); ?>
      <?php include ("blocks/footer.php");?>
    </body>
</html>
