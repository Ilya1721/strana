<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShowBiz;

class ShowBizController extends Controller
{
    public function index()
    {
      return ShowBiz::take(22)->get();
    }

    public function show(ShowBiz $showbiz)
    {
      return $showbiz;
    }
}
