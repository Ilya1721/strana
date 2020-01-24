<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowBizController extends Controller
{
    public function index()
    {
      return view('showbiz');
    }

    public function show($name)
    {
      return view('/generated/'.$name);
    }
}
