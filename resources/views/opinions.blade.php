@extends('layouts.app')

@section('content')
<div class="news-grid">
  <div id="opinion" class="left-side-opinion">

  </div>
  <div class="right-side">
    @yield('right_bar', View::make('layouts.right_bar'))
  </div>
</div>
@endsection
