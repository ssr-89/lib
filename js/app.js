'use strict';
document.addEventListener('DOMContentLoaded', () => {
  const body = document.querySelector('body');
  const wrapper = document.getElementById('wrapper');
  const main = document.getElementById('main');

  const lockPadding = document.querySelectorAll(".lock-padding");

  let unlock = true;
  const timeout = 300;

  function bodyLock() {
    const lockPaddingValue = window.innerWidth - document.querySelector("#wrapper").offsetWidth + "px"; // разница между шириной всего viewport и шириной объекта, который находится внутри viewport.
    // Т.е., получаем ширину скролла, который убирается при открытии popup.
    // Это делается для того, чтобы при исчезновании/появлении скролла контент не двигался в стороны на ширину скролла.
    if (lockPadding.length > 0) {
      /*цикл для фиксированных объектов, чтобы не двигались при исчезновании/появлении скролла*/
      for (let index = 0; index < lockPadding.length; index++) {
        const el = lockPadding[index];
        el.style.paddingRight = lockPaddingValue;
      }
    }
    body.style.paddingRight = lockPaddingValue;
    body.classList.add("lock");

    unlock = false;
    /*таймаут используется для того, чтобы дополнительно не заблокировался скролл при новом нажатии на ссылку popup после закрытия предыдущего*/
    setTimeout(function () {
      unlock = true;
    }, timeout);
  }
  function bodyUnLock() {
    setTimeout(function () {
      /*проверка наличие объектов lockPadding*/
      if (lockPadding.length > 0) {
        for (let index = 0; index < lockPadding.length; index++) {
          const el = lockPadding[index];
          el.style.paddingRight = "0px";
        }
      }
      body.style.paddingRight = "0px";
      body.classList.remove("lock");
    }, timeout);

    unlock = false;
    setTimeout(function () {
      unlock = true;
    }, timeout);
  }

  /*плавный скрол*/
  const anchors = document.querySelectorAll('.js-scroll-link')

  for (let anchor of anchors) {
    anchor.addEventListener('click', function (e) {
      e.preventDefault()

      const blockID = anchor.getAttribute('href').substr(1)

      document.getElementById(blockID).scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      })
    })
  };

  /*HEADER*/
  function addHeader() {
    const $header = document.createElement('header');
    $header.id = "header";
    $header.classList.add('header', 'lock-padding');
    $header.innerHTML = '';
    wrapper.prepend($header);
  }
  addHeader();

  function addFooter() {
    const $footer = document.createElement('footer');
    $footer.id = "footer";
    $footer.classList.add('footer');
    $footer.innerHTML = '<div class="footer__container"><h2 class="footer__title title">Обратная&nbsp;связь</h2><form class="footer__form footer-form" action="#" method="post"><input class="footer-form__input input" type="text" placeholder="Введите имя*" required><input class="footer-form__input input" type="email" placeholder="Введите Email*" required><textarea class="footer-form__textarea input" placeholder="Введите текст*" required></textarea><button class="footer-form__btn btn" type="submit">Отправить</button></form></div>';
    wrapper.append($footer);
  }
  addFooter();

  const header = document.getElementById('header');
  main.style.marginTop = header.getBoundingClientRect().height + "px";

  /*header-menu*/
  const headerTop = document.querySelector('.header-top-nav');
  const headerOther = document.querySelector('.header-other');
  const headerMenu = document.querySelector('.header-menu');
  const headerBurger = document.querySelector('.header-burger');
  const headerMenuLinks = document.querySelectorAll('.header-menu-item');

  function openHeaderMenu() {
    headerBurger.addEventListener('click', () => {
      if (!headerBurger.classList.contains('open-menu')) {
        bodyLock();
        headerBurger.classList.add('open-menu');
        headerTop.classList.add('open-menu');
      } else {
        bodyUnLock();
        headerBurger.classList.remove('open-menu');
        headerTop.classList.remove('open-menu');
      }
    });
    headerMenuLinks.forEach(function (el) {
      el.addEventListener('click', function () {
        bodyUnLock();
        headerBurger.classList.remove('open-menu');
        headerTop.classList.remove('open-menu');
      });
    });
    document.addEventListener('keydown', function (e) {
      if (e.which === 27) {
        // код клавиши 27 (Esc)
        bodyUnLock();
        headerBurger.classList.remove('open-menu');
        headerTop.classList.remove('open-menu');
      }
    });
  }
  openHeaderMenu();


  /*header-search*/
  const headerSearchInput = document.querySelector('.header-search-form__input');
  const headerSearchBtn = document.querySelector('.header-search-form__btn');

  function showSearch() {
    let headerSearchBtnActive;
    headerSearchBtn.addEventListener('click', () => {
      setTimeout(() => {
        headerSearchBtn.type = 'submit';
      }, timeout);
      headerSearchInput.classList.add('show');
    });
    if (!headerSearchInput.classList.contains('show')) {
      headerSearchBtn.type = 'button';
    }
    document.addEventListener('click', (el) => {
      if (
        !el.target.closest(
          '.header-search-form__btn, .header-search-form__input'
        )
      ) {
        headerSearchBtn.type = 'button';
        headerSearchInput.classList.remove('show');
      }
    });
  }
  showSearch();
});
