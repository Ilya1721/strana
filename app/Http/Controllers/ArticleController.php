<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
      return view('articles');
    }

    public function show($name)
    {
      return view('/generated/'.$name);
    }
}
