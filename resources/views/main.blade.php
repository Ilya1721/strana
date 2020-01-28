@extends('layouts.app')

@section('content')
<div class="main-content">
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
    <a id="all-content-link" href="#">
      Все новости<i class="fas fa-angle-double-right arrow"></i>
    </a>
  </div>
  <div class="center-main">
    <div class="main-news-img">
      <a href="#">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxc0XbqZCcIDmAZp8CESWLrlH3FinbMwIrRNeFlolh_m7ltYaU&s"
        alt="news1">
      </a>
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
        <a href="#">
          <picture>
            <source type="image/webp" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675">
            <source type="image/jpeg" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.jfif?v=1580228549137">
            <img src="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675">
          </picture>
        </a>
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
    <a id="all-content-link" href="#">
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
      @for($i = 0; $i < 2; $i++)
      <a href="#">
        <picture>
          <source type="image/webp" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675">
          <source type="image/jpeg" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.jfif?v=1580228549137">
          <img src="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675">
        </picture>
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
        <picture>
          <source type="image/webp" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675">
          <source type="image/jpeg" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.jfif?v=1580228549137">
          <img src="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675">
        </picture>
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
</div>
@endsection
