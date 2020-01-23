<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Страна. Все новости Украины. Главные новости мира</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/ff26e78eae.js"
     crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="page">
      <div class="outer-div"></div>
      <div class="main-page">
        <header class="header">
          <div class="search-bar">
            <form action="#" method="GET" class="search-form">
              <input type="search" placeholder="Поиск...">
              <button type="submit">
                <i class="fa fa-search"></i>
              </button>
            </form>
          </div>
          <div class="upper-header">
            <div class="header-img-div">
              <a href="/">
                <img src="/img/logo.png" alt="logo">
              </a>
            </div>
            @for($i = 0; $i < 2; $i++)
            <div class="content-block">
              <a href="#">
                <img src="https://strana.ua/img/article/2454/69_tn.jpeg">
              </a>
              <div>
                <p>
                  <a href="#">
                    Для Вятровича, поездка в
                    Иерусалим - унижение Украины
                  </a>
                </p>
              </div>
            </div>
            @endfor
          </div>
          <nav class="navbar">
            <ul>
              <li id="nav-first-item">
                <a href="/news">Новости</a>
              </li>
              <li>
                <a href="/articles">Статьи</a>
              </li>
              <li>
                <a href="/interviews">Интервью</a>
              </li>
              <li>
                <a href="/opinions">Лента Соцсетей</a>
              </li>
              <li>
                <a href="/videos">Видео</a>
              </li>
              <li>
                <a href="/ataka-na-stranu">Атака на Страну</a>
              </li>
              <li>
                <a href="/church">Церковь</a>
              </li>
              <li>
                <a href="/finance">Деньги</a>
              </li>
              <li>
                <a href="/showbiz">Шоу-Бизнес</a>
              </li>
              <li>
                <a href="/sport">Спорт</a>
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
        <main>
          @yield('content')
        </main>
        <footer>
          <div class="footer-header">
            Лента соцсетей
          </div>
          <div class="footer-body">
            @for($i = 0; $i < 4; $i++)
            <div class="content-block">
              <a href="#">
                <img src="https://strana.ua/img/article/2454/69_tn.jpeg">
              </a>
              <div>
                <span class="text-grey">
                  Эдуард Долинский
                </span>
                <p class="text-bold">
                  <a href="#">
                    Для Вятровича, поездка в
                    Иерусалим - унижение Украины
                  </a>
                </p>
                <p>
                  Ему неприятно, что Зеленский
                  будет представлять там украинских
                  освободителей
                </p>
              </div>
            </div>
            @endfor
          </div>
          <div class="footer-header">
            Деньги
          </div>
          <div class="footer-body">
            @for($i = 0; $i < 4; $i++)
            <div class="content-block-reverse">
              <a href="#">
                <img src="/img/news3.jpg">
              </a>
              <p>
                <a href="#">
                  "Денег привалило". Компании получили
                  выплаты по НДС и опустили курс гривни
                </a>
              </p>
            </div>
            @endfor
          </div>
          <div class="footer-header">
            Выбор страны
          </div>
          <div class="footer-body">
            @for($i = 0; $i < 4; $i++)
            <div class="content-block-reverse">
              <a href="#">
                <img src="/img/news3.jpg">
              </a>
              <p>
                <a href="#">
                  "Денег привалило". Компании получили
                  выплаты по НДС и опустили курс гривни
                </a>
              </p>
            </div>
            @endfor
          </div>
          <div class="main-footer">
            <img src="/img/logo.png">
            <p>
              Наши контакты: <a href="#">info@strana.ua</a>
              <a href="#">О нас</a> <a href="#">Архив материалов</a><br>
              По вопросам размещения рекламы обращайтесь
              <a href="#">adv@strana.ua</a><br>
              © 2016-2020, <a href="#">СТРАНА.ua.</a>
              Все права защищены.<br>
              Частичное или полное использование материалов
              интернет-издания "СТРАНА.ua" разрешается только
              при условии прямой открытой для поисковых систем
              гиперссылки на непосредственный адрес материала на
              сайте <a href="#">strana.ua</a><br>
              Всі матеріали, які розміщені на цьому
              сайті із посиланням на агентство "Інтерфакс-Україна",
              не підлягають подальшому відтворенню та/чи розповсюдженню
              в будь-якій формі, інакше як з письмового дозволу агентства
              "Інтерфакс-Україна".
            </p>
          </div>
        </footer>
      </div>
      <div class="outer-div"></div>
    </div>
  </body>
</html>
