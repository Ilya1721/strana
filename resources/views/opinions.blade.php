@extends('layouts.app')

@section('content')
<div class="news-grid">
  <div class="left-side">
    @for($i = 0; $i < 16; $i++)
    <div class="content-block-opinion">
      @for($j = 0; $j < 2; $j++)
      <div class="inner-block">
        <div>
          <a href="/opinions/opinion1">
            <img src="img/news2.jfif">
          </a>
        </div>
        <div>
          <p class="text-grey">
            <a href="/opinions/opinion1">Дмитрий Раимов</a>
          </p>
          <p class="text">
            <a href="/opinions/opinion1">
              Сгорела любая власть, что воевала
              с прессой. Во все века и во всех странах
            </a>
          </p>
          <p class="date">cегодня</p>
        </div>
      </div>
      @endfor
    </div>
    @endfor
  </div>
  <div class="right-side">
    @yield('right_bar', View::make('layouts.right_bar'))
  </div>
</div>
@endsection
