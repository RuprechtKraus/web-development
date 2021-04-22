<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../web/css/style.css">
  <title>Jane Doe profile</title>
</head>
<body>
  <header class="header">
    <div class="header__container">
      <nav class="nav-bar">
        <a class="nav__link nav__about" href="#">
          <img class="nav__icon" src="../../web/images/about-me-icon.png" alt="about-me-icon">
          Обо мне
        </a>
        <a class="nav__link nav__hobby" href="#">
          <img class="nav__icon" src="../../web/images/my-hobby-icon.png" alt="my-hobby-icon">
          Мое хобби
        </a>
        <a class="nav__link nav__films" href="#">
          <img class="nav__icon" src="../../web/images/fav-films-icon.png" alt="fav-films-icon">
          Любимые фильмы
        </a>
      </nav>
    </div>
  </header>

  <img class="site-background" src="../../web/images/site-background.jpg" alt="">

  <div class="container">  
      <div class="content-avatar">
        <img class="content__image" src="../../web/images/jane-doe.jpg" alt="Jane Doe">
      </div>

      <div class="content-quote">
        <div class="quote__text">
          <p>Мы берем на себя много, потому что мало чего боимся</p>
        </div>
        <div class="quote__author">
          <p>— Том Демарко. Deadline</p>
        </div>
      </div>

      <div class="content-rating">
        <div class="content-fav_writers">
          <div class="content-fav_writers__label content-rating__label">
            Любимые писатели:
          </div>
          <ul class="fav_writers__list content-rating_list">
            <li>Айзек Азимов</li>
            <li>Говард Лавкрафт</li>
            <li>Дмитрий Глуховский</li>
            <li>Чак Паланик</li>
          </ul>
        </div>

        <div class="content-fav_films">
          <div class="content-fav_films__label content-rating__label">
            Любимые фильмы:
          </div>
          <ol class="fav_films__list content-rating_list">
            <li class="fav_films__first">Шоу Трумэна</li>
            <li>Малхолланд Драйв</li>
            <li>Семь жизней</li>
            <li>Гравитация</li>
          </ol>
        </div>
      </div>

      <div class="about">
        <h1 class="about__name">Jane Doe</h1>
        <div class="underline"></div>

         <div class="about__text about_me__text">
           <p>В 1930-е годы прошлого века физик Джордж Гамоу из университета штата Колорадо начал публиковать<br> мини-сериал рассказов о неком мистере Томпкинсе, банковском клерке средних лет. Мистер Томпкинс, как явствовало из этих историй, интересовался современной наукой. 
           </p>
         </div>

         <div class="about-hobby">
           <div class="about-hobby__label">Мое хобби</div>

           <div class="about-hobby__text about_me__text">
             <p>Он регулярно посещал вечерние лекции местного профессора и, разумеется, всегда засыпал на самом интересном месте.<br> 
              А когда просыпался, то обнаруживал себя в каком-нибудь параллельном мире, где один из основных законов физики действовал не так, как в его мире.
            </p>
           </div>
         </div>

         <div class="container__write-me">
          <a class="container__write-me__link" href="#write-me">Напиши мне </a>
          <div class="container__write-me__arrow">→</div>
         </div>
      </div>
  </div>

  <div class="films-container">
    <div class="films-container__inner">
      <div class="films-container__title">
        Любимые фильмы
      </div>

      <div class="films-container__list">
        <div class="film-column">
          <img class="film-screenshot film-screen-1" src="../../web/images/film-screenshot-1.jpg" alt="film-screen" class="film-screenshot">

          <div class="film-container__text">
            <div class="film-container__title">Побег из Шоушенка</div>
            <p class="film-container__desc">Успешный банкир Энди Дюфрейн обвинен в убийстве собственной жены и ее любовника. Оказавшись в тюрьме под названием Шоушенк, он сталкивается с жестокостью и беззаконием, царящими по обе стороны решетки. Каждый, кто попадает в эти стены, становится их рабом до конца жизни. Но Энди, вооруженный живым умом и доброй душой, отказывается мириться с приговором судьбы и начинает разрабатывать невероятно дерзкий план своего освобождения.</p>
          </div>
        </div>
        <div class="film-column">
          <img class="film-screenshot film-screen-2" src="../../web/images/film-screenshot-2.jpg" alt="film-screen" class="film-screenshot">

          <div class="film-container__text">
            <div class="film-container__title">Наркоз</div>
            <p class="film-container__desc">Клай Бересфорд вынужден лечь под нож. Однако в процессе операции на сердце он неожиданно приходит в себя. Находясь в парализованном состоянии, будучи не в силах пошевелить ни рукой, ни ногой, он, тем не менее, чувствует каждое касание скальпеля к своей плоти…</p>
          </div>
        </div>
        <div class="film-column">
          <img class="film-screenshot film-screen-3" src="../../web/images/film-screenshot-3.jpg" alt="film-screen" class="film-screenshot">

          <div class="film-container__text">
            <div class="film-container__title">Астрал</div>
            <p class="film-container__desc">Джош и Рене переезжают со своими детьми в новый дом, но не успевают толком распаковать вещи, как начинаются странные события. Необъяснимо перемещаются предметы, в детской звучат странные звуки… Но в настоящий ужас приходят родители, когда их десятилетний сын Далтон впадает в кому. Все усилия врачей в больнице помочь мальчику безуспешны.</p>
          </div>
        </div>
        <div class="film-column">
          <img class="film-screenshot film-screen-4" src="../../web/images/film-screenshot-4.jpg" alt="film-screen" class="film-screenshot">

          <div class="film-container__text">
            <div class="film-container__title">Гравитация</div>
            <p class="film-container__desc">Доктор Райан Стоун, блестящий специалист в области медицинского инжиниринга, отправляется в свою первую космическую миссию под командованием ветерана астронавтики Мэтта Ковальски, для которого этот полет — последний перед отставкой. Но во время, казалось бы, рутинной работы за бортом случается катастрофа.<br> 
            Шаттл уничтожен, а Стоун и Ковальски остаются совершенно одни; они находятся в связке друг с другом, и все, что они могут, — это двигаться по орбите в абсолютно черном пространстве без всякой связи с Землей и какой-либо надежды на спасение.</p>
          </div>
        </div>
      </div>
      
      <button class="films-container__button button">
        Все фильмы
      </button> 
    </div>
  </div>

  <form id="write-me" class="write-me" method="POST">
    <div class="write-me__label">
      <div class="left-line line"></div>
      <div class="write-me__text">Напиши мне</div>
      <div class="right-line line"></div>
    </div>
    
    <div class="input-form">
      <div class="input">
        <p class="input-label">Ваше имя <span class="asterisk">*</span></p>
        <input type="text" name="name" class="input__text" id="input__name" value="<?php echo $_SESSION["name"] ?? "" ?>">
        <?php if (isset($_SESSION["errors"]["name_error_msg"])): ?>
          <p><?php echo $_SESSION["errors"]["name_error_msg"]; ?></p>
        <?php endif; ?>
      </div>
      
      <div class="input">
        <p class="input-label">Ваш email <span class="asterisk">*</span></p>
        <input type="text" name="email" class="input__text" id="input__email" value="<?php echo $_SESSION["email"] ?? "" ?>">
        <?php if (isset($_SESSION["errors"]["email_error_msg"])): ?>
          <p><?php echo $_SESSION["errors"]["email_error_msg"]; ?></p>
        <?php endif; ?>
      </div>

      <div class="input">
        <p class="input-label">Откуда вы?</p>
        <select name="country" class="input__select select__country">
          <option value="russia">Россия</option>
          <option value="usa">США</option>
          <option value="uk">Великобритания</option>
          <option value="german">Германия</option>
        </select>
      </div>

      <div class="gender-container">
        <p class="input-label gender__label">Ваш пол</p>
        <div class="input-form__gender">
          <p class="radio-btn__text btn__male"><input type="radio" name="gender" value="m" class="gender__male">Мужской</p>
          <p class="radio-btn__text btn__female"><input type="radio" name="gender" value="f" class="gender__female">Женский</p>
        </div>
      </div>

      <div class="message-container">
        <p class="input-label">Ваше сообщение <span class="asterisk">*</span></p>
        <textarea name="message" class="message-container__input" cols="30" rows="10"></textarea>
        <?php if (isset($_SESSION["errors"]["message_error_msg"])): ?>
          <p><?php echo $_SESSION["errors"]["message_error_msg"]; ?></p>
        <?php endif; ?>
      </div>

      <div class="button-container">
        <input type="submit" value="Отправить" class="button submit-btn">
      </div>
    </div>
  </form>

  <footer class="footer">
    <p class="footer__text">© 2006-2018 Поволжский государственный технологический университет, ФГБОУ ВО «ПГТУ»</p>
  </footer>
</body>
</html>