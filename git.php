<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Git</title>
  <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/media.css">
  <link rel="stylesheet" href="css/git-main.css">
  <script defer src="js/app.js"></script>
  <script defer src="js/git-main.js"></script>
</head>

<body>
  <div id="wrapper" class="wrapper">
    <?php include('header.php'); ?>
    <main id="main" class="main">
      <section class="hero">
        <div class="hero__container">
          <div class="hero__content hero-content">
            <h1 class="hero-content__title-1 title">Что такое Git?</h1>
            <p class="hero-content__text text">
              <b>Git</b>&nbsp;&mdash; абсолютный лидер по&nbsp;популярности среди современных систем управления версиями. Это развитый проект с&nbsp;активной поддержкой и&nbsp;открытым исходным кодом. Система <b>Git</b> была изначально разработана в&nbsp;2005 году Линусом Торвальдсом&nbsp;&mdash; создателем ядра операционной системы Linux. <b>Git</b> применяется для управления версиями в&nbsp;рамках колоссального количества проектов по&nbsp;разработке&nbsp;ПО, как коммерческих, так и&nbsp;с&nbsp;открытым исходным кодом. Система используется множеством профессиональных разработчиков программного обеспечения. Она превосходно работает под управлением различных операционных систем и&nbsp;может применяться со&nbsp;множеством интегрированных сред разработки (IDE).
            </p>
            <p class="hero-content__text text">
              <b>Git</b>&nbsp;&mdash; система управления версиями с&nbsp;распределенной архитектурой. В&nbsp;отличие от&nbsp;некогда популярных систем вроде CVS и&nbsp;Subversion (SVN), где полная история версий проекта доступна лишь в&nbsp;одном месте, в&nbsp;<b>Git</b> каждая рабочая копия кода сама по&nbsp;себе является репозиторием. Это позволяет всем разработчикам хранить историю изменений в&nbsp;полном объеме.
            </p>
            <p class="hero-content__text text">
              Разработка в&nbsp;<b>Git</b> ориентирована на&nbsp;обеспечение высокой производительности, безопасности и&nbsp;гибкости распределенной системы.
            </p>
          </div>
          <nav class="hero__menu hero-menu">
            <ul class="hero-menu__list list">
              <li class="hero-menu__item">
                <a class="hero-menu__link link" href="#base">Часто&nbsp;используемые&nbsp;команды</a>
              </li>
              <li class="hero-menu__item">
                <a class="hero-menu__link link" href="#version">Версия&nbsp;Git</a>
              </li>
              <li class="hero-menu__item">
                <a class="hero-menu__link link" href="#sign-log-up">Регистрация&nbsp;и&nbsp;авторизация</a>
              </li>
              <li class="hero-menu__item">
                <a class="hero-menu__link link" href="#repo">Репозитории</a>
              </li>
              <li class="hero-menu__item">
                <a class="hero-menu__link link" href="#branches">Ветки</a>
              </li>
              <li class="hero-menu__item">
                <a class="hero-menu__link link" href="#info">Информационные&nbsp;команды</a>
              </li>
              <li class="hero-menu__item">
                <a class="hero-menu__link link" href="#change">Изменения&nbsp;и&nbsp;commits</a>
              </li>
              <li class="hero-menu__item">
                <a class="hero-menu__link link" href="#conflicts">Разрешение&nbsp;конфликтов</a>
              </li>
            </ul>
          </nav>
        </div>
      </section>
      <section id="base" class="base">
        <div class="base__container">
          <details class="base__accordion base-accordion">
            <summary class="base-accordion__btn">Часто&nbsp;используемые&nbsp;команды</summary>
            <ul class="base-accordion__content base-content">
              <li class="base-content__item">
                <p class="base-content__text text">
                  <b>git&nbsp;clone&nbsp;<i class="color-navy">ссылка&nbsp;на&nbsp;репозиторий</i></b> — копирование файлов на&nbsp;комп с&nbsp;сервера (подключение к&nbsp;удалённому репозиторию)
                </p>
              </li>
              <li class="base-content__item">
                <p class="base-content__text text">
                  <b>git&nbsp;add&nbsp;.&nbsp;<i class="color-navy">или&nbsp;имя&nbsp;файла</i></b> — индексирует изменения и&nbsp;даёт возможность откатить изменения
                </p>
              </li>
              <li class="base-content__item">
                <p class="base-content__text text">
                  <b>git&nbsp;commit&nbsp;-m&nbsp;"change&nbsp;gitignore"&nbsp;<i class="color-navy">или</i>&nbsp;"add&nbsp;index.html"</b> — сохраняет (комметит) файл(ы) для репозитория (на&nbsp;компе)
                </p>
              </li>
              <li class="base-content__item">
                <p class="base-content__text text">
                  <b>git&nbsp;push&nbsp;--set-upstream&nbsp;origin&nbsp;dev&nbsp;<i class="color-navy">или</i>&nbsp;-u&nbsp;origin&nbsp;dev</b> — загрузить на&nbsp;сервер файлы (&mdash;set-upstream или -u&nbsp;&mdash; параметр на&nbsp;всякий случай, чтобы наш репозиторий на&nbsp;компе был связан с&nbsp;репозиторием на&nbsp;удалённом сервере)
                </p>
              </li>
              <li class="base-content__item">
                <p class="base-content__text text">
                  <b>git&nbsp;pull&nbsp;origin&nbsp;<i class="color-navy">наименование&nbsp;ветки</i></b> — команда для дальнейших загрузок с&nbsp;сервера в&nbsp;без клонирования
                </p>
              </li>
              <li class="base-content__item">
                <p class="base-content__text text">
                  <b>git&nbsp;checkout&nbsp;-b&nbsp;<i class="color-navy">название&nbsp;ветки</i></b> — создание ветки и&nbsp;переключение на&nbsp;созданную ветку
                </p>
              </li>
              <li class="base-content__item">
                <p class="base-content__text text">
                  <b>git&nbsp;checkout&nbsp;<i class="color-navy">название&nbsp;ветки</i></b> — переключение между ветками
                </p>
              </li>
              <li class="base-content__item">
                <p class="base-content__text text">
                  <b>git&nbsp;branch</b> — посмотреть какие есть локальные ветки в&nbsp;репозитории * будет указан текущая ветка git branch название-ветки&nbsp;&mdash; создание ветки
                </p>
              </li>
              <li class="base-content__item">
                <p class="base-content__text text">
                  <b>git&nbsp;status</b> — показывает статус файлов в&nbsp;папке
                </p>
              </li>
            </ul>
          </details>
        </div>
      </section>
      <section id="version" class="version">
        <div class="version__container">
          <h2 class="version-git__title-2 title">Версия&nbsp;Git</h2>
          <p class="git-text version-git__text text">
            <b>git&nbsp;--version</b> - версия git
          </p>
        </div>
      </section>
      <section class="sign-log-up">
        <div id="sign-log-up" class="sign-log-up__container">
          <h2 class="sign-log-up__title-2 title">Регистрация&nbsp;и&nbsp;авторизация</h2>
          <p class="git-text sign-log-up__text text">
            <b>git&nbsp;config&nbsp;--global&nbsp;user.first&nbsp;"Ivan&nbsp;Ivanov"</b>&nbsp;-&nbsp;установка&nbsp;имени
          </p>
          <p class="git-text sign-log-up__text text">
            <b>git&nbsp;config&nbsp;--global&nbsp;user.email&nbsp;"ivanov89@gmail.com"</b>&nbsp;-&nbsp;установка&nbsp;почты
          </p>
          <p class="git-text sign-log-up__text text">
            <b>git&nbsp;config&nbsp;--list</b>&nbsp;-&nbsp;проверка&nbsp;имени&nbsp;и&nbsp;почты
          </p>
        </div>
      </section>
      <section id="repo" class="repo">
        <div class="repo__container">
          <h2 class="repo__title-2 title">Репозитории</h2>
          <div class="repo__block-content repo-block-content">
            <h3 class="repo-block-content__title-3 title">
              Создание и подключение к созданному удалённому репозиторию
            </h3>
            <ol class="repo-block-content__list">
              <li class="repo-block-content__item git-text">
                Создание на сервере удалённого репозитория
              </li>
              <li class="repo-block-content__item git-text">
                <b>git&nbsp;remote&nbsp;add&nbsp;origin&nbsp;<i class="color-navy">ссылка&nbsp;на&nbsp;созданный&nbsp;репозиторий</i></b> — подключение к удалённому репозиторию без клонирования
              </li>
              <li class="repo-block-content__item git-text">
                <b>git&nbsp;push&nbsp;--set-upstream&nbsp;origin&nbsp;dev&nbsp;<i class="color-navy">или</i>&nbsp;-u&nbsp;origin&nbsp;dev</b> - загрузить на сервер файлы (—set-upstream или -u — параметр на всякий случай, чтобы наш репозиторий на компе был связан с репозиторием на удалённом сервере)
              </li>
            </ol>
            <p class="git-text repo-block-content__text text">
              <b>git&nbsp; pull&nbsp; origin&nbsp; <i class="color-navy">наименование&nbsp; ветки</i></b> — команда для дальнейших загрузок с&nbsp;сервера без клонирования
            </p>
          </div>
          <div class="repo__block-content repo-block-content">
            <h3 class="repo-block-content__title-3 title">
              Процесс подключения к&nbsp;удалённому репозиторию&nbsp;1
            </h3>
            <p class="git-text repo-block-content__text text">
              <b>git&nbsp; clone&nbsp; <i class="color-navy">ссылка&nbsp; на&nbsp; репозиторий</i></b> — копирование файлов на&nbsp;комп с&nbsp;сервера (подключение к&nbsp;удалённому репозиторию)
            </p>
            <p class="git-text repo-block-content__text text">
              <b>git&nbsp; status</b> — показывает статус файлов в&nbsp;папке
            </p>
            <p class="git-text repo-block-content__text text">
              <b>git&nbsp;add&nbsp;.&nbsp;<i class="color-navy">или&nbsp;имя-файла</i></b> — индексирует изменения и&nbsp;даёт возможность откатить изменения
            </p>
            <p class="git-text repo-block-content__text text">
              <b>git&nbsp;commit&nbsp;-m&nbsp;"change&nbsp;gitignore"&nbsp;<i class="color-navy">или</i>&nbsp;"add&nbsp;index.html"</b> — сохраняет (комметит) файл(ы) для репозитория (на&nbsp;компе)
            </p>
            <p class="git-text repo-block-content__text text">
              <b>git&nbsp;push&nbsp;--set-upstream&nbsp;origin&nbsp;dev&nbsp;<i class="color-navy">или</i>&nbsp;-u&nbsp;origin&nbsp;dev</b> — загрузить на&nbsp;сервер файлы (&mdash;set-upstream или -u&nbsp;&mdash; параметр на&nbsp;всякий случай, чтобы наш репозиторий на&nbsp;компе был связан с&nbsp;репозиторием на&nbsp;удалённом сервере)
            </p>
          </div>
          <div class="repo__block-content repo-block-content">
            <h3 class="repo-block-content__title-3 title">
              Процесс подключения к&nbsp;удалённому репозиторию&nbsp;2
            </h3>
            <p class="git-text repo-block-content__text text">
              <b>git&nbsp;repo</b> — инициализация
            </p>
            <p class="git-text repo-block-content__text text">
              <b>git&nbsp;remote&nbsp;add&nbsp;origin&nbsp;<i class="color-navy">ссылка&nbsp;на&nbsp;репозиторий</i></b> — подключение к удалённому репозиторию без клонирования
            </p>
            <p class="git-text repo-block-content__text text">
              <b>git&nbsp;push&nbsp;--set-upstream&nbsp;origin&nbsp;dev&nbsp;<i class="color-navy">или</i>&nbsp;-u&nbsp;origin&nbsp;dev</b> —&nbsp;загрузить на сервер файлы (—set-upstream или -u — параметр на всякий случай, чтобы наш репозиторий на компе был связан с репозиторием на удалённом сервере)
            </p><br><br>
            <p class="git-text repo-block-content__text text">
              <b>"repo"</b> &mdash; это сокращение от&nbsp;<b>&laquo;repoialize&raquo;</b> (т.е. &laquo;инициализироать&raquo; или &laquo;включать&raquo;, &laquo;запускать&raquo;) Это значит, что когда&nbsp;Вы пишете <b>&laquo;git repo&raquo;</b>, Git &laquo;включается&raquo; или &laquo;запускается&raquo; для данного репозитория (т.е. папки).
            </p>
            <ol class="repo-block-content__list">
              <li class="repo-block-content__item">создание папки на&nbsp;компе</li>
              <li class="repo-block-content__item">добавить хотя&nbsp;бы один файл</li>
              <li class="repo-block-content__item">инициализировать в&nbsp;ней репозиторий</li>
              <li class="repo-block-content__item">добавить в&nbsp;индекс и&nbsp;в&nbsp;комит</li>
              <li class="repo-block-content__item">подключиться к&nbsp;удалённому репозиторию</li>
            </ol>
          </div>
          <div class="repo__block-content repo-block-content">
            <h3 class="repo-block-content__title-3 title">
              Настраивание и&nbsp;подключение к&nbsp;удалённому репозиторию
            </h3>
            <p class="git-text repo-block-content__text text">
              <b>git&nbsp;remote&nbsp;add&nbsp;origin&nbsp;<i class="color-navy">ссылка на&nbsp;репозиторий</i></b> &mdash; подключение к&nbsp;удалённому репозиторию без клонирования
            </p>
            <p class="git-text repo-block-content__text text">
              <b>git&nbsp;remote&nbsp;-v</b> &mdash; путь к&nbsp;настроенному удалённому репозиторию
            </p>
            <p class="git-text repo-block-content__text text">
              <b>git&nbsp;remote&nbsp;remove&nbsp;origin</b> — удаление действующего пути, после этого можно снова добавить, как в&nbsp;первой строке
            </p>
          </div>
        </div>
      </section>
      <section id="branches" class="branches">
        <div class="branches__container">
          <h2 class="branches__title-2 title">Ветки</h2>
          <ul class="branches__list branches-list list">
            <li class="branches-list__item">
              <h3 class="branches-list__title-3 title">Создание&nbsp;ветки</h3>
              <p class="branches-list__text git-text text">
                1. <b>git&nbsp;checkout&nbsp;-b&nbsp;<i class="color-navy">название&nbsp;ветки</i></b> &mdash; создание ветки и&nbsp;переключение на&nbsp;созданную ветку
              </p>
              <p class="branches-list__text git-text text">
                2. <b>git&nbsp;branch</b> &mdash; посмотреть какие есть локальные ветки в&nbsp;репозитории * будет указан текущая ветка git branch название-ветки&nbsp;&mdash; создание ветки
              </p>
              <p class="branches-list__text git-text text">
                3. <b>git&nbsp;branch&nbsp;-a</b> &mdash; посмотреть какие есть локальные и&nbsp;удалённые ветки в&nbsp;репозитории * будет указан текущая ветка git branch название-ветки&nbsp;&mdash; создание ветки
              </p>
              <p class="branches-list__text git-text text">
                4. <b>git&nbsp;checkout&nbsp;<i class="color-navy">название&nbsp;ветки</i></b> &mdash; переключение между ветками
              </p>
              <p class="branches-list__text git-text text">
                5. <b>git&nbsp;push&nbsp;&mdash;set-upstream&nbsp;origin&nbsp;dev&nbsp;<i class="color-navy">или</i>&nbsp;-u&nbsp;origin&nbsp;dev</b> &mdash; загрузка новой ветки на&nbsp;удалённый репозиторий со&nbsp;всеми изменениями (commits)
              </p>
              <p class="branches-list__text git-text text">
                6. <b>git&nbsp;log</b> &mdash; посмотреть изменения в&nbsp;ветках
              </p>
            </li>
            <li class="branches-list__item">
              <h3 class="branches-list__title-3 title">Слияние&nbsp;веток</h3>
              <p class="branches-list__text git-text text">
                <b>git&nbsp;merge&nbsp;<i class="color-navy">ветка</i></b> &mdash; вливание в&nbsp;ветку, в&nbsp;которой в&nbsp;данный момент находится пользователь (в&nbsp;команде указывается ветка, которая будет вливаться)
              </p>
            </li>
            <li class="branches-list__item">
              <h3 class="branches-list__title-3 title">Запрос&nbsp;на&nbsp;слияние</h3>
              <p class="branches-list__text git-text text">
                <b>pull&nbsp;request</b> — GitHub
              </p>
              <p class="branches-list__text git-text text">
                <b>merge&nbsp;request</b> — GitLab
              </p>
            </li>
            <li class="branches-list__item">
              <h3 class="branches-list__title-3 title">Модели&nbsp;ветвления</h3>
              <div class="branches-list__block">
                <h4 class="branches-list__title-4 title">Git&nbsp;Flow</h4>
                <p class="branches-list__text git-text text">
                  <b>master</b> — главная ветка, которую оберегают от&nbsp;любых вливаний без проверки
                </p>
                <p class="branches-list__text git-text text">
                  <b>develop (dev)</b> — ветка, в&nbsp;которую вносятся все изменения
                </p>
                <p class="branches-list__text git-text text">
                  <b>release</b> — вливаются изменения для вливания в&nbsp;master после проверки
                </p>
                <p class="branches-list__text git-text text">
                  <b>hotfix (hotfixes)</b> — ветка для внедрения быстрых изменений
                </p>
              </div>
              <div class="branches-list__block">
                <h4 class="branches-list__title-4 title">TBD&nbsp;&mdash; Trunk Based Development</h4>
                <p class="branches-list__text git-text text">
                  <b>master</b> — основная ветка, в&nbsp;которую вливаются все изменения после проверки
                </p>
                <p class="branches-list__text git-text text">
                  <b>доп. ветка</b> — в&nbsp;которой производятся все изменения. Ветка удаляется после вливания или отклонения вливания в&nbsp;ветку master
                </p>
              </div>
            </li>
            <li class="branches-list__item">
              <h3 class="branches-list__title-3 title">Отмена&nbsp;слияний</h3>
              <p class="branches-list__text git-text text">
                <b>git&nbsp;reset&nbsp;—merge&nbsp;<i class="color-navy">коммит</i></b> — до&nbsp;которого сбрасывается слияние. Отменяет только закоммиченные изменения.
              </p>
              <p class="branches-list__text git-text text">
                <b>git&nbsp;merge&nbsp;—abort</b> — отмена слияния веток из-за их&nbsp;конфликта
              </p>
            </li>
            <li class="branches-list__item">
              <h3 class="branches-list__title-3 title">Переименование&nbsp;ветки</h3>
              <p class="branches-list__text git-text text">
                <b>git&nbsp;branch&nbsp;—m&nbsp;<i class="color-navy">новое&nbsp;имя&nbsp;ветки</i></b> — переименование ветки
              </p>
            </li>
            <li class="branches-list__item">
              <h3 class="branches-list__title-3 title">Удаление&nbsp;ветки</h3>
              <p class="branches-list__text git-text text">
                Необходимо перейти из&nbsp;ветки на&nbsp;удаление в&nbsp;другую ветку
              </p>
              <p class="branches-list__text git-text text">
                <b>git&nbsp;branch&nbsp;—d&nbsp;<i class="color-navy">ветка</i></b> — удаление ветки
              </p>
              <p class="branches-list__text git-text text">
                <b>git&nbsp;branch&nbsp;&mdash;D&nbsp;<i class="color-navy">ветка</i></b>&nbsp;&mdash; удаление ветки в&nbsp;случае ошибки, что ветка не&nbsp;влита в&nbsp;другую ветка
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section id="info" class="info">
        <div class="info__container">
          <h2 class="info__title-2 title">Информационные&nbsp;команды</h2>
          <p class="info__text git-text text">
            <b>ls</b> — посмотреть какие файлы есть в&nbsp;папке, в&nbsp;которой сейчас находимся
          </p>
          <p class="info__text git-text text">
            <b>ls&nbsp;-la</b> — посмотреть ВСЁ содержимое папки
          </p>
          <p class="info__text git-text text">
            <b>pwd</b> — показывает в&nbsp;какой папке находимся
          </p>
          <p class="info__text git-text text">
            <b>git&nbsp;show</b> — показывает о&nbsp;последнем commits и&nbsp;его содержимом
          </p>
          <p class="info__text git-text text">
            <b>git&nbsp;log</b> — показывает всю историю commits
          </p>
          <p class="info__text git-text text">
            <b>git&nbsp;blame</b> — показывает автора коммита
          </p>
        </div>
      </section>
      <section id="change" class="change">
        <div class="change__container">
          <h2 class="change__title-2 title">Изменения&nbsp;и&nbsp;commits</h2>
          <div class="change__block change-block">
            <h3 class="change-block__title-3 title">Просмотр незакоммиченных изменений и&nbsp;сравнение изменений</h3>
            <p class="change-block__text git-text text">
              <b>git&nbsp;diff&nbsp;<i class="color-navy">наименование&nbsp;файла/commits</i></b> — просмотр изменений, также можно посмотреть без наименования файла/commits
            </p>
            <p class="change-block__text git-text text note">
              Данной командой можно просмотреть любые изменения, в&nbsp;том числе сравнить закоммиченные изменения
            </p>
            <p class="change-block__text git-text text">
              &nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp;Для сравнения изменений между коммитами необходимо вначале ввести команду <b>git&nbsp;log</b> и&nbsp;выбрать первые четыре цифры двух коммитов.
            </p>
            <p class="change-block__text git-text text">
              &nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp;Далее ввести команду <b>git&nbsp;diff</b> и&nbsp;следом прописать 4&nbsp;цифры более раннего коммита и&nbsp;потом 4&nbsp;цифры более позднего коммита
            </p>
            <p class="change-block__text git-text text">
              Для сравнения изменений двух файлов необходимо после команды <b>git&nbsp;diff</b> ввести наименования файлов через пробел
            </p>
          </div>
          <div class="change__block change-block">
            <h3 class="change-block__title-3 title">
              Откладывание изменений
            </h3>
            <p class="change-block__text git-text text">
              <b>git&nbsp;stash</b>&nbsp;&mdash; отложить внесённых изменений
            </p>
            <p class="change-block__text git-text text">
              <b>git&nbsp;stash&nbsp;pop</b>&nbsp;&mdash; вернуться к&nbsp;отложенным изменениям, тем самым данные изменения сливаются с&nbsp;последним commit
            </p>
            <p class="change-block__text git-text text">
              <b>git&nbsp;stash&nbsp;list</b> — посмотреть список отложенных изменений
            </p>
            <p class="change-block__text git-text text note">
              <b>Примечание:</b> если имеется несколько отложенных изменений, то&nbsp;при восстановлении командой <b>git&nbsp;stash&nbsp;pop</b> восстановится последнее отложение изменение
            </p>
            <p class="change-block__text git-text text">
              <b>git&nbsp;stash&nbsp;drop&nbsp;<i class="color-navy">номер</i></b> — удаление отложенного изменения
            </p>
            <p class="change-block__text git-text text note">
              <b>Примечание:</b> возможно отложить изменения в&nbsp;одной ветке, а&nbsp;восстановить в&nbsp;другой
            </p>
          </div>
          <div class="change__block change-block">
            <h3 class="change-block__title-3 title">Исправление и&nbsp;добавление в&nbsp;последний коммит</h3>
            <p class="change-block__text git-text text">
              <b>git&nbsp;commit&nbsp;&mdash;amend&nbsp;&mdash;m&nbsp;&rsquo;<i class="color-navy">комментарий</i>&rsquo;</b> &mdash; исправление названия последнего коммита
            </p>
            <p class="change-block__text git-text text">
              <b>git&nbsp;commit&nbsp;&mdash;amend&nbsp;&mdash;no-edit</b>&nbsp;&mdash; добавление изменённых файлов в&nbsp;последний коммит
            </p>
          </div>
          <div class="change__block change-block">
            <h3 class="change-block__title-3 title">Отмена закоммиченных изменений</h3>
            <p class="change-block__text git-text text">
              <b>git&nbsp;checkout&nbsp;коммит&nbsp;<i class="color-navy">файл&nbsp;</i></b>&mdash; отмена коммита по&nbsp;данному файлу
            </p>
            <p class="change-block__text git-text text">
              <b>git&nbsp;revert&nbsp;commit&nbsp;<i class="color-navy">коммит</i></b>&nbsp;&mdash; отмена указанного коммита. После ввода данной команды будет предложено отредактировать коммит. Обычно просто выходят из&nbsp;редактора командой &laquo;wq&raquo; и&nbsp;нажимают Enter
            </p>
            <p class="change-block__text git-text text">
              <b>git&nbsp;revert&nbsp;no-commit&nbsp;<i class="color-navy">коммит</i></b>&nbsp;&mdash; отмена указанного коммита. Даёт возможность удалить несколько коммитов подряд и&nbsp;после удаления всех коммитов в&nbsp;конце можно один раз закоммитить
            </p>
          </div>
          <div class="change__block change-block">
            <h3 class="change-block__title-3 title">Исключение папки/файла из&nbsp;отслеживаемых:</h3>
            <p class="change-block__text git-text text">
              Вначале добавить файл в&nbsp;<b>gitignore</b>
            </p>
            <p class="change-block__text git-text text">
              <b>git&nbsp;rm&nbsp;&mdash;cached&nbsp;<i class="color-navy">файл</i></b>&nbsp;&mdash; исключить файл из&nbsp;отслеживаемых
            </p>
          </div>
          <div class="change__block change-block">
            <h3 class="change-block__title-3 title">Сброс/откат изменений</h3>
            <p class="change-block__text git-text text">
              <b>git&nbsp;reset&nbsp;&mdash;soft&nbsp;<i class="color-navy">коммит</i></b>&nbsp;&mdash; возвращает изменения в&nbsp;индекс. На&nbsp;файлы в&nbsp;индексе не&nbsp;воздействует
            </p>
            <p class="change-block__text git-text text">
              <b>git&nbsp;reset&nbsp;&mdash;mixed&nbsp;<i class="color-navy">коммит</i></b>&nbsp;&mdash; отменяет коммиты вплоть до&nbsp;указанного и&nbsp;возвращает все изменения в&nbsp;рабочую директорию
            </p>
            <p class="change-block__text git-text text">
              <b>git&nbsp;reset&nbsp;HEAD~1</b>&nbsp;&mdash; указывает сколько последних коммитов надо сбросить, при этом сброшенные коммиты будут неиндексированы
            </p>
            <p class="change-block__text git-text text">
              <b>git&nbsp;reset&nbsp;&mdash;hard&nbsp;<i class="color-navy">коммит</i></b>&nbsp;&mdash; сбрасывает до&nbsp;указанного коммита и&nbsp;удаляет сброшенные коммиты безвозвратно
            </p>
            <p class="change-block__text git-text text">
              <b>git&nbsp;reset&nbsp;&mdash;hard</b>&nbsp;&mdash; отмена изменений (воздействует на&nbsp;файлы, которые отслеживаются Git-ом (безвозвратно)
            </p>
          </div>
          <div class="change__block change-block">
            <h3 class="change-block__title-3 title">Откат незакоммиченного файла</h3>
            <p class="change-block__text git-text text">
              <b>git&nbsp;restore&nbsp;<i class="color-navy">файл</i></b> — откат незакоммиченного файла
            </p>
            <p class="change-block__text git-text text">
              <b>git&nbsp;restore&nbsp;&mdash;staged&nbsp;<i class="color-navy"></i></b>&nbsp;&mdash; удаление из&nbsp;индекса незакоммиченного файла (безвозвратно)
            </p>
          </div>
          <div class="change__block change-block">
            <h3 class="change-block__title-3 title">Удаление файлы, неотслеживаемого Git-ом</h3>
            <p class="change-block__text git-text text">
              <b>git&nbsp;clean&nbsp;-f</b>&nbsp;&mdash; удаляет файлы, которые не&nbsp;отслеживаются Git-ом (безвозвратно)
            </p>
          </div>
          <div class="change__block change-block">
            <h3 class="change-block__title-3 title">Удаление папки/файла</h3>
            <ol class="change-block__list">
              <li class="change-block__item">
                <i class="color-navy">удалить из&nbsp;локальной папки</i>
              </li>
              <li class="change-block__item">
                <i class="color-navy">прописать</i> <b>git&nbsp;rm&nbsp;-r&nbsp;<i class="color-navy">название&nbsp;папки/</i></b>
              </li>
              <li class="change-block__item">
                <b>git&nbsp;add&nbsp;<i class="color-navy">название&nbsp;папки</i></b>
              </li>
              <li class="change-block__item">
                <b>git&nbsp;commit&nbsp;-m&nbsp;&laquo;commiteted&nbsp;<i class="color-navy">название&nbsp;папки</i>&raquo;</b>
              </li>
              <li class="change-block__item">
                <b>git&nbsp;push&nbsp;&mdash;set-upstream&nbsp;origin&nbsp;dev</b>
              </li>
            </ol>
          </div>
        </div>
      </section>
      <section id="conflicts" class="conflicts">
        <div class="conflicts__container" style="border: none;">
          <h2 class="conflicts__title-2 title">Разрешение&nbsp;конфликтов</h2>
          <p class="conflicts__text git-text text">
            <b>Meld</b> — редактор для разрешения конфликтов
          </p>
          <p class="conflicts__text git-text text">
            <b>git&nbsp;config&nbsp;—global&nbsp;merge.tool&nbsp;meld</b> — установка meld в git
          </p>
          <p class="conflicts__text git-text text">
            <b>Пример:</b> при слиянии двух конфликтующих веток откроется редактор meld и&nbsp;предложит варианты для разрешения
          </p>
        </div>
      </section>
    </main>
  </div>
</body>

</html>