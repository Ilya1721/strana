@extends('layouts.app')

@section('content')
<div class="main-content">
  <div class="left-main">
    <div class="last-news-header">
      Последние новости
    </div>
    <div id="lastReport">

    </div>
    <a id="all-content-link" href="/news">
      Все новости<i class="fas fa-angle-double-right arrow"></i>
    </a>
  </div>
  <div class="center-main">
    <div class="main-news-header">
      Главные статьи
    </div>
    <div id="mainArticle" class="main-news-body">

    </div>
    <a id="all-content-link" href="/articles">
      Все статьи<i class="fas fa-angle-double-right arrow"></i>
    </a>
  </div>
  <div class="right-main">
    <div class="right-main-header">
      <ul>
        <li>Видео</li>
      </ul>
    </div>
    <div class="right-main-body">
      <div id="mainVideo">

      </div>
      <div class="right-main-header">
        Популярное
      </div>
      <div id="mainReport">

      </div>
      <div class="right-main-header mt-10">
        Частная жизнь
      </div>
      <div id="mainPrivate">

      </div>
    </div>
  </div>
</div>
@endsection
