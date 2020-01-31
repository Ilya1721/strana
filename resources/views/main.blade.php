@extends('layouts.app')

@section('content')
<div class="main-content">
  <div class="left-main">
    <div class="last-news-header">
      Последние новости
    </div>
    @foreach($reports as $report)
    <div class="last-news-body">
      <div class="time">14:15</div>
      <a href="/news/{{ $report->id }}">
        {{ $report->title }}
      </a>
    </div>
    @endforeach
    <a id="all-content-link" href="/news">
      Все новости<i class="fas fa-angle-double-right arrow"></i>
    </a>
  </div>
  <div class="center-main">
    <div class="main-news-header">
      Главные статьи
    </div>
    <div class="main-news-body">
      @foreach($articles as $article)
      <div class="content-block">
        <a href="/articles/{{ $article->id }}">
          <picture>
            <source type="image/webp" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675">
            <source type="image/jpeg" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.jfif?v=1580228549137">
            <img src="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675">
          </picture>
        </a>
        <h3 class="text-container">
          <a href="/articles/{{ $article->id }}">
            {{ $article->title }}
          </a>
        </h3>
        <p class="text-container">
          {{ $article->description }}
        </p>
      </div>
      @endforeach
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
      @foreach($videos as $video)
      <a href="/videos/{{ $video->id }}">
        <picture>
          <source type="image/webp" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675">
          <source type="image/jpeg" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.jfif?v=1580228549137">
          <img src="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675">
        </picture>
      </a>
      <p>
        <a href="/videos/{{ $video->id }}">
          {{ $video->title }}
        </a>
      </p>
      @endforeach
      <div class="right-main-header">
        Популярное
      </div>
      @php($i = 1)
      @foreach($populars as $popular)
      <div class="content-block">
        <div class="left-block">
          {{ $i }}
        </div>
        <div class="right-block">
          <a href="/news/{{ $popular->id}}">
            {{ $popular->title }}
          </a>
        </div>
      </div>
      @php($i++)
      @endforeach
      <div class="right-main-header mt-10">
        Частная жизнь
      </div>
      @foreach($privates as $private)
      <a href="/articles/{{ $private->id }}">
        <picture>
          <source type="image/webp" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675">
          <source type="image/jpeg" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.jfif?v=1580228549137">
          <img src="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675">
        </picture>
      </a>
      <p>
        <a href="/articles/{{ $private->id }}" class="fs-3 fw-3">
          {{ $private->title }}
        </a>
      </p>
      @endforeach
    </div>
  </div>
</div>
@endsection
