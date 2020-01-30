@extends('layouts.app')

@section('content')
<div class="news-grid">
  <div class="left-side">
    @foreach($videos as $video)
    <div class="content-block">
      <p class="date">Сегодня, 14:32</p>
      <p class="text">
        <a href="/videos/{{ $video->id }}">
          {{ $video->title }}
        </a>
      </p>
    </div>
    @endforeach
  </div>
  <div class="right-side">
    @yield('right_bar', View::make('layouts.right_bar'))
  </div>
</div>
@endsection
