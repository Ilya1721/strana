@extends('layouts.app')

@section('content')
<div class="news-grid">
  <div id="church" class="left-side">

  </div>
  <div class="right-side">
    @yield('right_bar', View::make('layouts.right_bar'))
  </div>
</div>
@endsection
