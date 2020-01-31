@yield('right_bar')
<div class="header">
  Главное
</div>
@foreach($right_bar_articles as $right_bar_article)
<a href="/articles/{{ $right_bar_article->id }}">
  <picture>
    <source type="image/webp" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675">
    <source type="image/jpeg" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.jfif?v=1580228549137">
    <img src="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675">
  </picture>
</a>
<p>
  <a href="/articles/{{ $right_bar_article->id }}">
    {{ $right_bar_article->title }}
  </a>
</p>
@endforeach
<div class="video-header">
  <ul>
    <li>Видео</li>
  </ul>
</div>
@foreach($right_bar_videos as $right_bar_video)
<a href="/videos/{{ $right_bar_video->id }}">
  <picture>
    <source type="image/webp" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675">
    <source type="image/jpeg" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.jfif?v=1580228549137">
    <img src="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675">
  </picture>
</a>
<p>
  <a href="/videos/{{ $right_bar_video->id }}">
    {{ $right_bar_video->title }}
  </a>
</p>
@endforeach
<div id="popular" class="header">
  Популярное
</div>
@php($i = 1)
@foreach($right_bar_reports as $right_bar_report)
<div class="content-block">
  <div class="left-block">
    {{ $i }}
  </div>
  <div class="right-block">
    <a href="/news/{{ $right_bar_report->id }}">
      {{ $right_bar_report->title }}
    </a>
  </div>
</div>
@php($i++)
@endforeach
<div class="header mt-10">
  Частная жизнь
</div>
@foreach($right_bar_privates as $right_bar_private)
<a href="/articles/{{ $right_bar_private->id }}">
  <picture>
    <source type="image/webp" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675">
    <source type="image/jpeg" srcset="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.jfif?v=1580228549137">
    <img src="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675">
  </picture>
</a>
<p>
  <a href="/articles/{{ $right_bar_private->id }}" class="fs-3 fw-3">
    {{ $right_bar_private->title }}
  </a>
</p>
@endforeach
