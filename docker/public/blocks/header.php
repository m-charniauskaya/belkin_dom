<header>

  <?php
    $pageName = substr ($_SERVER['PHP_SELF'], 1);
    $args = array();

    function is_active ($page, $args) {
      foreach ($args as $value){
        if ($value == $page){
          return true;
          break;
        } else {
        };
      };
    };
  ?>

  <div class="header-content">
      <a href="/index.html"><img src="./img/logo.png"></a>
      <div id="special-nav">
          <a <?php echo is_active($pageName, ['basket.php']) ? "class='active'" : ""; ?> a href="/basket.html" id="basket">Корзина(0)</a>
          <a href="#" class="active">
              Ru
          </a>
          <a href="#">
              En
          </a>
      </div>

      <nav id="main-menu">
          <ul>
              <li>
                  <a <?php echo is_active($pageName, ['index.php']) ? "class='active'" : ""; ?> href="/index.html">О нас</a>
              </li>
              <li>
                  <a <?php echo is_active($pageName, ['store.php', 'item.php', 'slider.php', 'order.php', 'confirm.php']) ? "class='active'" : ""; ?> href="/store.html">Магазин</a>
              </li>
              <li>
                  <a <?php echo is_active($pageName, ['blog-list.php','blogpost.php']) ? "class='active'" : ""; ?> href="/blog.html">Блог</a>
              </li>
              <li>
                  <a <?php echo is_active($pageName, ['faq.php']) ? "class='active'" : ""; ?> href="/faq.html">FAQ</a>
              </li>
              <li>
                  <a <?php echo is_active($pageName, ['contacts.php']) ? "class='active'" : ""; ?> href="/contacts.html">Контакты</a>
              </li>
              <li>
                  <a <?php echo is_active($pageName, ['reviews.php']) ? "class='active'" : ""; ?> href="/reviews.html">Отзывы</a>
              </li>
              <li>
                  <a <?php echo is_active($pageName, ['partners.php']) ? "class='active'" : ""; ?>href="/partners.html">Партнеры</a>
              </li>
          </ul>
      </nav>
    </div>
</header>
