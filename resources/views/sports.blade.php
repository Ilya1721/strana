@extends('layouts.app')

@section('content')
<div class="news-grid">
  <div class="left-side">
    @foreach($sports as $sport)
    <div class="content-block">
      <p class="date">Сегодня, 14:32</p>
      <p class="text">
        <a href="/sport/{{ $sport->id }}">
          {{ $sport->title }}
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
