@extends('layouts.app')

@section('content')
<div class="news-grid">
  <div class="left-side">
    @foreach($interviews as $interview)
    <div class="content-block-article">
      <div>
        <a href="/interviews/{{ $interview->id }}">
          <picture>
            <source type="image/webp" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675">
            <source type="image/jpeg" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.jfif?v=1580228549137">
            <img src="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675">
          </picture>
        </a>
      </div>
      <div>
        <p class="date">Сегодня, 14:32</p>
        <p class="text">
          <a href="/interviews/{{ $interview->id }}">
            {{ $interview->title }}
          </a>
        </p>
      </div>
    </div>
    @endforeach
  </div>
  <div class="right-side">
    @yield('right_bar', View::make('layouts.right_bar'))
  </div>
</div>
@endsection
