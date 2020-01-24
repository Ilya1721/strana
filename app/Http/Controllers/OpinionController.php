<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpinionController extends Controller
{
    public function index()
    {
      return view('opinions');
    }

    public function show($name)
    {
      return view('/generated/'.$name);
    }
}
