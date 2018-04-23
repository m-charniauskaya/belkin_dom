<header>

  <?php include ("./classMenu.php"); ?>
  <?php include ("./classMenuItem.php");?>
  <?php include ("./objMenu.php");?>
  <div class="header-content">
      <a href="/index.html"><img src="./img/logo.png"></a>
      <div id="special-nav">
          <a href="/basket.html" id="basket">Корзина(0)</a>
          <a href="#" class="active">
              Ru
          </a>
          <a href="#">
              En
          </a>
      </div>
      <nav id="main-menu">
          <ul>
            <?php echo $menu;?>
          </ul>
      </nav>
    </div>
</header>
