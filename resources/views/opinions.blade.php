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
            <picture>
              <source type="image/webp" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675">
              <source type="image/jpeg" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.jfif?v=1580228549137">
              <img src="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675">
            </picture>
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
