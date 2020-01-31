<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Opinion;
use App\Article;
use App\Video;
use App\Report;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      view()->composer('*', function ($view)
      {
          $header_opinions = Opinion::take(2)->get();
          $header_articles = Article::take(4)->get();
          $footer_opinions = Opinion::take(4)->get();
          $footer_finance_articles = Article::take(4)->get();
          $footer_pick_articles = Article::take(4)->get();
          $right_bar_articles = Article::take(1)->get();
          $right_bar_videos = Video::take(1)->get();
          $right_bar_reports = Report::take(5)->get();
          $right_bar_privates = Article::take(1)->get();

          $view->with([
            'header_opinions' => $header_opinions,
            'header_articles' => $header_articles,
            'footer_opinions' => $footer_opinions,
            'footer_finance_articles' => $footer_finance_articles,
            'footer_pick_articles' => $footer_pick_articles,
            'right_bar_articles' => $right_bar_articles,
            'right_bar_videos' => $right_bar_videos,
            'right_bar_reports' => $right_bar_reports,
            'right_bar_privates' => $right_bar_privates,
          ]);
      });
    }
}
