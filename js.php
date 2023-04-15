<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JavaScript</title>
  <link rel="shortcut icon" href="img/javascript.svg" type="image/x-icon">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/media.css">
  <script defer src="js/app.js"></script>
  <script defer>
    document.addEventListener("DOMContentLoaded", function() {
      const body = document.querySelector('body');

      function addHeader() {
        const $header = document.createElement('header');
        $header.classList.add('header', 'lock-padding');
        $header.innerHTML = '<div class="header__container"><nav class="header__menu header-menu"><ul id="header-menu-list" class="header-menu__list list"><li class="header-menu__item"><a class="header-menu__link link" href="../index.html"><span>ГЛАВНАЯ&nbsp;СТРАНИЦА</span></a></li><li class="header-menu__item"><a class="header-menu__link link" href="../folder-html-css/html-css.html"><span>HTML&nbsp;и&nbsp;CSS</span></a></li><li class="header-menu__item"><a class="header-menu__link link" href="../folder-js/js.html"><span>JavaScript</span></a></li><li class="header-menu__item"><a class="header-menu__link link" href="../folder-git/git.html"><span>Git</span></a></li><li class="header-menu__item"><a class="header-menu__link link" href="../folder-tools/tools.html"><span>Инструменты</span></a></li><li class="header-menu__item"><a class="header-menu__link link" href="../folder-templates/templates.html"><span>Шаблоны</span></a></li><li class="header-menu__item"><a class="header-menu__link link" href="../folder-guide/guide.html"><span>Справочник</span></a></li></ul></nav></div><button id="header-burger" class="header-menu-burger btn"><span></span></button>';
        body.prepend($header);
      }
      addHeader();

      function addFooter() {
        const $footer = document.createElement('footer');
        $footer.classList.add('footer');
        $footer.innerHTML = '<div class="footer__container"><h2 class="footer__title title">Обратная&nbsp;связь</h2><form class="footer__form footer-form" action="#" method="post"><input class="footer-form__input input" type="text" placeholder="Введите имя*" required><input class="footer-form__input input" type="email" placeholder="Введите Email*" required><textarea class="footer-form__textarea input" placeholder="Введите текст*" required></textarea><button class="footer-form__btn btn" type="submit">Отправить</button></form></div>';
        body.append($footer);
      }
      addFooter();

      const header = document.querySelector("header");
      const headerMenu = document.getElementById("header-menu-list");
      const headerBurger = document.getElementById("header-burger");

      headerBurger.addEventListener("click", function() {
        body.classList.toggle('blocking');
        header.classList.toggle("pull");
        headerBurger.classList.toggle("open");
        headerMenu.classList.toggle("show");
      });

      /*section-menu*/
      const sectionMenu = document.querySelector(".section-menu__menu");
      const sectionBtn = document.querySelector(".section-menu__btn");
      const sectionMenuLinks = document.querySelectorAll(".menu__link");

      sectionBtn.addEventListener("click", function(e) {
        e.preventDefault();
        this.classList.toggle("active");
        if (this.classList.contains("active")) {
          sectionMenu.classList.add("active");
        } else {
          sectionMenu.classList.remove("active");
        }
      });
      sectionMenuLinks.forEach(function(el) {
        el.addEventListener("click", function() {
          sectionBtn.classList.remove("active");
          sectionMenu.classList.remove("active");
        });
      });
      document.addEventListener('mouseup', (element) => {
        if (!sectionBtn.contains(element.target)) {
          sectionBtn.classList.remove("active");
          sectionMenu.classList.remove("active");
        }
      });
      sectionBtn.setAttribute("aria-label", "open-menu");
    });
  </script>
</head>

<body>
  <div id="wrapper" class="wrapper">
    <?php include('header.php'); ?>
    <main id="main" class="main">
      <section class="hero">
        <div class="hero__container">
          <h1 class="hero__title title">JavaScript</h1>
          <p class="hero__text text">
            <span class="fw-bold">JavaScript</span>&nbsp;&mdash; один из&nbsp;тех языков программирования, которые можно просто освоить без опыта. Он&nbsp;используется для веб-разработки, на&nbsp;нем можно создавать серверные приложения, 3D-игры и&nbsp;даже программировать робототехнику.
          </p>
        </div>
      </section>
      <section class="js-main">
        <div class="js-main__container">
          <nav class="js-main__menu js-main-menu">
            <ul class="js-main-menu__list list">
              <li class="js-main-menu__item">
                <a class="js-main-menu__link link" href="js-data-types.html">Типы&nbsp;данных</a>
              </li>
              <li class="js-main-menu__item">
                <a class="js-main-menu__link link" href="js-operators.html">Операторы</a>
              </li>
              <li class="js-main-menu__item">
                <a class="js-main-menu__link link" href="js-cycle.html">Циклы</a>
              </li>
              <li class="js-main-menu__item">
                <a class="js-main-menu__link link" href="js-array.html">Массивы</a>
              </li>
              <li class="js-main-menu__item">
                <a class="js-main-menu__link link" href="js-function.html">Функции</a>
              </li>
              <li class="js-main-menu__item">
                <a class="js-main-menu__link link" href="js-objects.html">Объекты</a>
              </li>
              <li class="js-main-menu__item">
                <a class="js-main-menu__link link" href="js-methods.html">Методы</a>
              </li>
              <li class="js-main-menu__item">
                <a class="js-main-menu__link link" href="js-dom.html">События&nbsp;DOM</a>
              </li>
              <li class="js-main-menu__item">
                <a class="js-main-menu__link link" href="js-json.html">JSON&nbsp;(JavaScript Object Notation)</a>
              </li>
              <li class="js-main-menu__item">
                <button class="js-other-menu-list__btn btn">Справочник&nbsp;JavaScript</button>
                <ul class="js-main-menu__js-other-menu-list js-other-menu-list">
                  <li class="js-other-menu-list__item">
                    <a class="js-other-menu-list__link link" href="js-other.html#operator-param">Остаточные параметры, "arguments" и оператор расширения</a>
                  </li>
                  <li class="js-other-menu-list__item">
                    <a class="js-other-menu-list__link link" href="js-other.html#falsy">falsy - ложные значения</a>
                  </li>
                  <li class="js-other-menu-list__item">
                    <a class="js-other-menu-list__link link" href="js-other.html#nodejs">Node.js в VSCode</a>
                  </li>
                  <li class="js-other-menu-list__item">
                    <a class="js-other-menu-list__link link" href="js-other.html#lexical">Лексическое окружение (в блоках, циклах, замыкание функции)</a>
                  </li>
                </ul>
              </li>
              <!-- <li class="js-main-menu__item">
                <a class="js-main-menu__link link" href="#"></a>
              </li> -->
            </ul>
          </nav>
        </div>
      </section>
    </main>
  </div>
</body>

</html>