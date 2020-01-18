<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

  </head>
  <body>
    <div class="page">
      <div class="outer-div"></div>
      <div class="main-page">
        <header class="header">
          <div class="upper-header">
            <div class="header-img-div">
              <a href="/">
                <img src="img/logo.png" alt="logo">
              </a>
            </div>
          </div>
          <nav class="navbar">
            <ul>
              <li id="nav-first-item">
                <a href="#">Новости</a>
              </li>
              <li>
                <a href="#">Статьи</a>
              </li>
              <li>
                <a href="#">Интервью</a>
              </li>
              <li>
                <a href="#">Лента Соцсетей</a>
              </li>
              <li>
                <a href="#">Видео</a>
              </li>
              <li>
                <a href="#">Атака на Страну</a>
              </li>
              <li>
                <a href="#">Церковь</a>
              </li>
              <li>
                <a href="#">Деньги</a>
              </li>
              <li>
                <a href="#">Шоу-Бизнес</a>
              </li>
              <li>
                <a href="#">Спорт</a>
              </li>
            </ul>
          </nav>
          <div class="lower-header">
            <div class="lower-header-content">
              <ul>
                <li>
                  <a href="#">Lorem ipsum dolor sit amet, consectetur</a>
                </li>
                <li>
                  <a href="#">Lorem ipsum dolor sit amet, consectetur</a>
                </li>
              </ul>
            </div>
            <div class="lower-header-content">
              <ul>
                <li>
                  <a href="#">Lorem ipsum dolor sit amet, consectetur</a>
                </li>
                <li>
                  <a href="#">Lorem ipsum dolor sit amet, consectetur</a>
                </li>
              </ul>
            </div>
          </div>
        </header>
        <main class="main-content">
          <div class="left-main">
            <div class="last-news-header">
              Последние новости
            </div>
            @for($i = 0; $i < 24; $i++)
            <div class="last-news-body">
              <div class="time">14:15</div>
              <a href="#">
                Nam singulis ita officia, et duis
                aut export, do proident
              </a>
            </div>
            @endfor
          </div>
          <div class="center-main">
            <div class="main-news-img">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxc0XbqZCcIDmAZp8CESWLrlH3FinbMwIrRNeFlolh_m7ltYaU&s"
              alt="news1">
              <div class="img-text">
                <a href="#">
                  In tempor adipisicing
                </a>
              </div>
            </div>
            <div class="main-news-header">
              Главные статьи
            </div>
            <div class="main-news-body">
              @for($i = 0; $i < 8; $i++)
              <div class="content-block">
                <img src="img/news2.jfif">
                <h3>
                  <a href="#">Lorem ipsum dolor</a>
                </h3>
                <p class="text-container">
                  Lorem ipsum dolor sit amet,
                  consectetur adipisicing elit
                </p>
              </div>
              @endfor
            </div>
          </div>
          <div class="right-main">
            <div class="right-main-header">
              <ul>
                <li>Видео</li>
              </ul>
            </div>
            <div class="right-main-body">
              @for($i = 0; $i < 2; $i++)
              <a href="#">
                <img src="img/news2.jfif">
              </a>
              <p>
                <a href="#">
                  Lorem ipsum dolor sit amet,
                  consectetur adipisicing elit
                </a>
              </p>
              @endfor
              <div class="right-main-header">
                Популярное
              </div>
              @for($i = 0; $i < 5; $i++)
              <div class="content-block">
                <div class="left-block">
                  1
                </div>
                <div class="right-block">
                  <a href="#">
                    Nam quis ne magna, laboris
                    aliqua est fabulas
                    transferrem, non amet duis
                    id incididunt
                  </a>
                </div>
              </div>
              @endfor
              <div class="right-main-header mt-10">
                Частная жизнь
              </div>
              @for($i = 0; $i < 2; $i++)
              <a href="#">
                <img src="img/news2.jfif">
              </a>
              <p>
                <a href="#" class="fs-3 fw-3">
                  Lorem ipsum dolor sit amet,
                  consectetur adipisicing elit
                </a>
              </p>
              @endfor
            </div>
          </div>
        </main>
      </div>
      <div class="outer-div"></div>
    </div>
  </body>
</html>
