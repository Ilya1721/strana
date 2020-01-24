@extends('layouts.app')

@section('content')
<div class="news-grid">
  <div class="left-side">
    @for($i = 0; $i < 22; $i++)
    <div class="content-block-article">
      <div>
        <a href="/articles/article1">
          <img src="img/news2.jfif">
        </a>
      </div>
      <div>
        <p class="date">Сегодня, 14:32</p>
        <p class="text">
          <a href="/articles/article1">
            У Зеленского назвали тему
            разговора в случае его
            встречи с Путиным в Израиле
          </a>
        </p>
      </div>
    </div>
    @endfor
  </div>
  <div class="right-side">
    @yield('right_bar', View::make('layouts.right_bar'))
  </div>
</div>
@endsection
