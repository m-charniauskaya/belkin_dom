<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>белкин дом</title>
        <link href="./styles/style.css" rel="stylesheet">
    </head>
    <body>
        <?php include ("blocks/header.php"); ?>

        <main class="main-container">
          <table id="basket-table" cellspacing="0" cellpadding="12">
            <tr>
              <td>Товар</td>
              <td>Цена</td>
              <td>Количество</td>
              <td>Сумма</td>
            </tr>
            <tr>
              <td>
                <img src="./img/basket-img.jpg"></br>
                <a href="#">Вязаный ковер</a>
              </td>
              <td>100р.</td>
              <td>
                <input type="text" value="1">
              </td>
              <td id="remove">100р.</td>
            </tr>
            <tr>
              <td>Общая сумма</td>
              <td></td>
              <td></td>
              <td>100р.</td>
            </tr>
          </table>
          <div id="basket-button"><a>Оформить заказ</a></div>
        </main>

        <?php include ("blocks/footer.php"); ?>
    </body>
</html>
