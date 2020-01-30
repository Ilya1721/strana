@extends('layouts.app')

@section('content')
<div class="news-grid">
  <div class="left-side">
    @foreach($opinions as $opinion)
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
            <a href="/opinions/{{ $opinion->id }}">
              {{ $opinion->journalist->first_name}}
               {{$opinion->journalist->last_name}}
             </a>
          </p>
          <p class="text">
            <a href="/opinions/{{ $opinion->id }}">
              {{ $opinion->title }}
            </a>
          </p>
          <p class="date">cегодня</p>
        </div>
      </div>
      @endfor
    </div>
    @endforeach
  </div>
  <div class="right-side">
    @yield('right_bar', View::make('layouts.right_bar'))
  </div>
</div>
@endsection
