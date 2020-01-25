<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Страна. Все новости Украины. Главные новости мира</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/ff26e78eae.js"
     crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="page">
      <div class="outer-div"></div>
      <div class="main-page">
        <div id="header">

        </div>
        <main>
          @yield('content')
        </main>
        <div id="footer">

        </div>
      </div>
      <div class="outer-div"></div>
    </div>
  </body>
</html>

<script src="../js/button_highlighter.js"></script>
<script src="../js/app_ajax_loader.js"></script>
