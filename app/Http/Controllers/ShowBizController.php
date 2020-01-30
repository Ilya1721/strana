<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShowBiz;

class ShowBizController extends Controller
{
    public function index()
    {
      $showbizs = ShowBiz::take(22)->get();

      return view('showbizs', [
        'showbizs' => $showbizs,
      ]);
    }

    public function show($showbiz)
    {
      $showbiz = ShowBiz::find($showbiz);

      return view('showbiz', [
        'showbiz' => $showbiz,
      ]);
    }
}
