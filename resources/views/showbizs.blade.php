@extends('layouts.app')

@section('content')
<div class="news-grid">
  <div id="showbiz" class="left-side">

  </div>
  <div class="right-side">
    @yield('right_bar', View::make('layouts.right_bar'))
  </div>
</div>
@endsection
