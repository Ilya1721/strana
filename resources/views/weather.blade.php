@extends('layouts.app')

@section('content')
<div class="news-grid">
  <div class="left-side">
    <div class="content-block">
      <p class="date">Сегодня, 14:32</p>
      <p class="text">
        Pariatur summis admodum iudicem id elit eiusmod relinqueret sed si proident
        domesticarum, iis nisi summis ea occaecat. An malis tempor aute fabulas hic
        magna nescius familiaritatem. Iudicem instituendarum hic ullamco. Est noster
        praesentibus non o ipsum velit magna constias e ea occaecat concursionibus, si
        non anim summis legam.Consequat minim admodum. Ingeniis si dolor nescius, aute
        eu ingeniis se nulla, nam duis constias ubi pariatur summis id excepteur
        illustriora, aute iudicem arbitrantur, est eram multos ita litteris est commodo
        quo quid probant in fugiat commodo do offendit. Sunt singulis ita enim culpa,
        nescius export de voluptate cohaerescant qui proident quid incurreret aliquip eu
        est incididunt ubi nostrud, occaecat enim a nostrud despicationes, ingeniis
        dolore aute ne labore te duis mandaremus et quamquam e ut veniam arbitrantur
      </p>
    </div>
  </div>
  <div class="right-side">
    @yield('right_bar', View::make('layouts.right_bar'))
  </div>
</div>
@endsection
