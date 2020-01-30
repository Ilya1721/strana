<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
      $articles = Article::take(22)->get();

      return view('articles', [
        'articles' => $articles,
      ]);
    }

    public function show($article)
    {
      $article = Article::find($article);

      return view('article', [
        'article' => $article,
      ]);
    }
}
