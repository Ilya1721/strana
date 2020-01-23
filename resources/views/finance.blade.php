@extends('layouts.app')

@section('content')
<div class="news-grid">
  <div class="left-side">
    @for($i = 0; $i < 22; $i++)
    <div class="content-block">
      <p class="date">Сегодня, 14:32</p>
      <p class="text">
        <a href="#">
          У Зеленского назвали тему
          разговора в случае его
          встречи с Путиным в Израиле
        </a>
      </p>
    </div>
    @endfor
  </div>
  <div class="right-side">
    @yield('right_bar', View::make('layouts.right_bar'))
  </div>
</div>
@endsection
