<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Страна. Все новости Украины. Главные новости мира</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>
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
                <picture>
                  <source type="image/webp" srcset="https://cdn.glitch.com/df2f4336-7807-4759-9fe9-87dd99b452c8%2Flogo.webp?v=1580224340353">
                  <source type="image/jpeg" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Flogo.png?v=1580228691139">
                  <img src="https://cdn.glitch.com/df2f4336-7807-4759-9fe9-87dd99b452c8%2Flogo.webp?v=1580224340353">
                </picture>
              </a>
            </div>
            @foreach($header_opinions as $header_opinion)
            <div class="content-block">
              <a href="/opinions/{{ $header_opinion->id }}">
                <picture>
                  <source type="image/webp" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Farticle1.webp?v=1580229441558">
                  <source type="image/jpeg" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Farticle1.jpeg?v=1580228838463">
                  <img src="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Farticle1.webp?v=1580229441558">
                </picture>
              </a>
              <div>
                <p>
                  <a href="/opinions/{{ $header_opinion->id}}">
                    {{ $header_opinion->title }}
                  </a>
                </p>
              </div>
            </div>
            @endforeach
          </div>
          <nav class="navbar">
            <ul>
              <li id="nav-first-item">
                <a class="menu-btn" href="/news">
                  Новости
                </a>
              </li>
              <li>
                <a class="menu-btn" href="/articles">Статьи</a>
              </li>
              <li>
                <a class="menu-btn" href="/interviews">Интервью</a>
              </li>
              <li>
                <a class="menu-btn" href="/opinions">Лента Соцсетей</a>
              </li>
              <li>
                <a class="menu-btn" href="/videos">Видео</a>
              </li>
              <li>
                <a class="menu-btn" href="/ataka-na-stranu">Атака на Страну</a>
              </li>
              <li>
                <a class="menu-btn" href="/church">Церковь</a>
              </li>
              <li>
                <a class="menu-btn" href="/finance">Деньги</a>
              </li>
              <li>
                <a class="menu-btn" href="/showbiz">Шоу-Бизнес</a>
              </li>
              <li>
                <a class="menu-btn" href="/sport">Спорт</a>
              </li>
            </ul>
          </nav>
          <div class="lower-header">
            <div class="lower-header-content">
              <ul>
                @for($i = 0; $i < 2; $i++)
                <li>
                  <a href="/articles/{{ $header_articles[$i]->id }}">
                    {{ $header_articles[$i]->title }}
                  </a>
                </li>
                @endfor
              </ul>
            </div>
            <div class="lower-header-content">
              <ul>
                @for($i = 2; $i < 4; $i++)
                <li>
                  <a href="/articles/{{ $header_articles[$i]->id }}">
                    {{ $header_articles[$i]->title }}
                  </a>
                </li>
                @endfor
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
            @foreach($footer_opinions as $footer_opinion)
            <div class="content-block">
              <a href="#">
                <picture>
                  <source type="image/webp" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Farticle1.webp?v=1580229441558">
                  <source type="image/jpeg" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Farticle1.jpeg?v=1580228838463">
                  <img src="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Farticle1.webp?v=1580229441558">
                </picture>
              </a>
              <div>
                <span class="text-grey">
                  Эдуард Долинский
                </span>
                <p class="text-bold">
                  <a href="/opinions/{{ $footer_opinion->id }}">
                    {{ $footer_opinion->title }}
                  </a>
                </p>
                <p>
                  {{ $footer_opinion->description }}
                </p>
              </div>
            </div>
            @endforeach
          </div>
          <div class="footer-header">
            Деньги
          </div>
          <div class="footer-body">
            @foreach($footer_finance_articles as $footer_finance_article)
            <div class="content-block-reverse">
              <a href="/articles/{{ $footer_finance_article->id }}">
                <picture>
                  <source type="image/webp" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews3.webp?v=1580229297518">
                  <source type="image/jpeg" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews3.jpg?v=1580228527324">
                  <img src="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews3.webp?v=1580229297518">
                </picture>
              </a>
              <p>
                <a href="/articles/{{ $footer_finance_article->id }}">
                  {{ $footer_finance_article->title }}
                </a>
              </p>
            </div>
            @endforeach
          </div>
          <div class="footer-header">
            Выбор страны
          </div>
          <div class="footer-body">
            @foreach($footer_pick_articles as $footer_pick_article)
            <div class="content-block-reverse">
              <a href="/articles/{{ $footer_pick_article->id }}">
                <picture>
                  <source type="image/webp" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews3.webp?v=1580229297518">
                  <source type="image/jpeg" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews3.jpg?v=1580228527324">
                  <img src="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews3.webp?v=1580229297518">
                </picture>
              </a>
              <p>
                <a href="/articles/{{ $footer_pick_article->id }}">
                  {{ $footer_pick_article->title }}
                </a>
              </p>
            </div>
            @endforeach
          </div>
          <div class="main-footer">
            <picture>
              <source type="image/webp" srcset="https://cdn.glitch.com/df2f4336-7807-4759-9fe9-87dd99b452c8%2Flogo.webp?v=1580224340353">
              <source type="image/png" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Flogo.png?v=1580228691139">
              <img src="https://cdn.glitch.com/df2f4336-7807-4759-9fe9-87dd99b452c8%2Flogo.webp?v=1580224340353">
            </picture>
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

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/ff26e78eae.js"
        crossorigin="anonymous"></script>
