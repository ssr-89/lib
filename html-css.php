<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTML and CSS</title>
  <link rel="shortcut icon" href="img/favicon-html.svg" type="image/x-icon">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/media.css">
  <script defer src="js/app.js"></script>
</head>

<body>
  <div id="wrapper" class="wrapper">
    <?php include('header.php'); ?>
    <main id="main" class="main">
      <section class="hero">
        <div class="hero__container">
          <h1 class="hero__title title">HTML и CSS</h1>
          <nav class="hero__menu hero-menu">
            <ul class="hero-menu__list list">
              <li class="hero-menu__item">
                <a class="hero-menu__link link" href="article.html">HTML-1</a>
              </li>
              <li class="hero-menu__item">
                <a class="hero-menu__link link" href="media.html">HTML-2</a>
              </li>
              <li class="hero-menu__item">
                <a class="hero-menu__link link" href="css.html">CSS</a>
              </li>
              <!-- <li class="hero-menu__item">
                <a class="hero-menu__link link" href="html-css-flex.html">FlexBox</a>
              </li> -->
            </ul>
          </nav>
        </div>
      </section>
      <section class="gallery">
        <div class="gallery__container">
          <ul class="gallery__slide gallery-slider list">
            <li class="gallery-slider__item">
              <h3 class="gallery-slider__title title">Артурик 2015</h3>
              <!-- <img src="img/а15.avif" alt="Артурик в 2015" class="gallery-slider__img img"> -->
            </li>
            <li class="gallery-slider__item">
              <h3 class="gallery-slider__title title">Элиночка 2018</h3>
              <!-- <img src="img/э18-1.avif" alt="Элиночка в 2018" class="gallery-slider__img img"> -->
            </li>
            <li class="gallery-slider__item">
              <h3 class="gallery-slider__title title">Артурик 2022</h3>
              <!-- <img src="img/а22-2.avif" alt="Артурик в 2022" class="gallery-slider__img img"> -->
            </li>
            <li class="gallery-slider__item">
              <h3 class="gallery-slider__title title">Элиночка 2022</h3>
              <!-- <img src="img/э22-2.avif" alt="Элиночка в 2022" class="gallery-slider__img img"> -->
            </li>
          </ul>
        </div>
      </section>
    </main>
  </div>
</body>

</html>