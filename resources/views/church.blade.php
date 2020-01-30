@extends('layouts.app')

@section('content')
<div class="news-grid-inner">
  <div class="left-side">
    <div class="header">
      Читайте также
    </div>
    @for($i = 0; $i < 3; $i++)
    <p class="content-block-left">
      <a href="#">
        У Зеленского назвали тему
        разговора в случае его
        встречи с Путиным в Израиле
        разговора в случае его
        встречи с Путиным в Израиле
      </a>
    </p>
    @endfor
  </div>
  <div class="middle-side">
    <div class="content-block-news">
      <p class="header">
        {{ $church->title }}
      </p>
      <p class="date">Сегодня, 14:32</p>
      <p class="text">
        {{ $church->body }}
      </p>
    </div>
  </div>
  <div class="right-side">
    @yield('right_bar', View::make('layouts.right_bar'))
  </div>
</div>
@endsection
