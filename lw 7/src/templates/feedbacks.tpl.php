<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../web/css/style.css">
  <link rel="stylesheet" href="../../web/css/feedback-style.css">
  <title>Сообщения</title>
</head>
<body>

  <div class="feedback-content">

    <form class="sender-email" >
      <div class="input">
        <p class="input-label">Найти письмо</p>
        <input id="input__email" class="input__text feedback-email" type="text" name="email" placeholder="Sender's email"
        required="required">
      </div>

      <div class="feedback-button-container">
        <input class="button submit-btn" type="submit" value="Отправить">
      </div>
    </form>

    <?php 
        $gender = "";

        if (strcmp($args["gender"], "m"))
        {
            $gender = "Мужской";
        }
        else if (strcmp($args["gender"], "f"))
        {
            $gender = "Мужской";
        }
        else
        {
            $gender = "Не указан";
        }
    ?>

    <?php if (!empty($args)): ?>
      <ul class="info-list">
        <li>Имя: <?php echo $args["name"] ?? "???" ?></li>
        <li>Email: <?php echo $args["email"] ?? "???" ?></li>
        <li>Страна: <?php echo $args["country"] ?? "???" ?></li>
        <li>Пол: <?php echo $gender ?></li>
      </ul>
      <p class="feedback-content__message message-label">Сообщение:</p>
      <p class="feedback-content__message"><?php echo $args["message"] ?? "???" ?></p>
    <?php endif; ?>
  </div>

</body>
</html>