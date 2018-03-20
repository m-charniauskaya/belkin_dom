<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>белкин дом</title>
        <link href="./styles/style.css" rel="stylesheet">
    </head>
    <body>
        <?php include ("blocks/header.php"); ?>

        <main class="main-container">
          <div id="contacts">
            <p>Если что-то пошло не так или у вас есть вопросы/предложения/просьбы, мне можно написать на belkin.home@gmail.com
              или воспользоваться формой ниже, и я обязательно отвечу).</p>
            <form method="post" action="#">
              <div id="left-side">
                <input type="text" placeholder="Имя">
                <input type="text" placeholder="Телефон">
                <input type="text" placeholder="Контактный e-mail">
              </div>
              <textarea placeholder="Cooбщение..."></textarea>
              <input type="submit" value="Отправить">
            </form>
          </div>

        </main>

        <?php include ("blocks/footer.php"); ?>
    </body>
</html>
