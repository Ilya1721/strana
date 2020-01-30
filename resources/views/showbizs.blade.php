@extends('layouts.app')

@section('content')
<div class="news-grid">
  <div class="left-side">
    @foreach($showbizs as $showbiz)
    <div class="content-block">
      <p class="date">Сегодня, 14:32</p>
      <p class="text">
        <a href="/showbiz/{{ $showbiz->id }}">
          {{ $showbiz->title }}
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
