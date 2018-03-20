<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>белкин дом</title>
        <link href="./styles/style.css" rel="stylesheet">
    </head>
    <body>
        <?php include ("blocks/header.php"); ?>

        <main>
            <div class="store-menu">
              <ul>
                <li><a href="#" class="icon in-stock active">В наличии</a></li>
                <li><a href="#" class="icon individual-order">Индивидуальный заказ</a></li>
                <li><a href="#" class="icon scheme">Схемы ковров</a></li>
              </ul>
              <ul id="sub-menu">
                <li><a href="#" class="active">Ковры<sup class="counter">2</sup></a></li>
                <li><a href="#">Пуфы<sup class="counter">1</sup></a></li>
                <li><a href="#" class="not-in-stock">Корзины<sup class="counter">0</sup></a></li>
                <li><a href="#">Пледы<sup class="counter">4</sup></a></li>
              </ul>
            </div>
            <div class = "slider">
              <ul>
                <span class="prev"></span>
                <li style="background-image:url('./img/slider-1.jpg');">
                  <div class="description">
                    <h1>Вязаный ковер</h1><br/>
                    <p>Вязаный ковер из трикотажной пряжи<br/>100% хлопок</p>
                  </div>
                  <div class="more-big"><a href="#">Подробнее</a></div>
                </li>
                <span class="next"></span>
              </ul>
            </div>
        </main>
        <?php include ("blocks/footer.php"); ?>
    </body>
</html>
