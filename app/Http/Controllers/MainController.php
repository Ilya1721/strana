<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\Article;
use App\Video;
use App\Opinion;

class MainController extends Controller
{
    public function index()
    {
      $reports = Report::take(24)->get();
      $articles = Article::take(12)->get();
      $videos = Video::take(2)->get();
      $populars = Report::take(5)->get();
      $privates = Report::take(2)->get();

      return view('main', [
        'reports' => $reports,
        'articles' => $articles,
        'videos' => $videos,
        'populars' => $populars,
        'privates' => $privates,
      ]);
    }
}
