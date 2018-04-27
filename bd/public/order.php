<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>белкин дом</title>
        <link href="./styles/style.css" rel="stylesheet">
    </head>
    <body>
        <?php include ("blocks/header.php"); ?>

        <main class="main-container">
          <div class="store-menu">
            <ul>
              <li><a href="#" class="icon in-stock">В наличии</a></li>
              <li><a href="#" class="icon individual-order active">Индивидуальный заказ</a></li>
              <li><a href="#" class="icon scheme">Схемы ковров</a></li>
            </ul>
          </div>
          <div id="order-form">
            <form method="post" action="#">
              <input type="text" placeholder="Имя">
              <input type="text" placeholder="Контактный e-mail">
              <textarea placeholder="Хочу заказать..."></textarea>
              <input type="text" placeholder="Размер">
              <input type="text" placeholder="Форма">
              <div id="select">
                <select>
                  <option selected disabled style="background: #3a3a3a;">Выбор материала</option>
                  <option>100% хлопок</option>
                  <option>Полиэстр</option>
                  <option>Акрил</option>
                </select>
              </div>
              <input type="submit" value="Отправить">
            </form>
          </div>
        </main>

        <?php include ("blocks/footer.php"); ?>
    </body>
</html>
