<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Страна. Все новости Украины. Главные новости мира</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
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
          <div id="headerOpinion">

          </div>
          <nav id="nav" class="navbar">

          </nav>
          <div id="headerArticle">

          </div>
        </header>
        <main>
          @yield('content')
        </main>
        <footer>
          <div class="footer-header">
            Лента соцсетей
          </div>
          <div id="footerOpinion">

          </div>
          <div class="footer-header">
            Деньги
          </div>
          <div id="footerFinanceArticle">

          </div>
          <div class="footer-header">
            Выбор страны
          </div>
          <div id="footerPickArticle">

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
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/all.js') }}"></script>
