<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
      return Article::take(22)->get();
    }

    public function show(Article $article)
    {
      return $article;
    }

    public function header()
    {
      return Article::take(4)->get();
    }

    public function footer_finance()
    {
      return Article::take(4)->get();
    }

    public function footer_pick()
    {
      return Article::take(4)->get();
    }

    public function right_bar()
    {
      return Article::take(1)->get();
    }

    public function private()
    {
      return Article::take(1)->get();
    }
}
