<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
      return view('videos');
    }

    public function show($name) 
    {
      return view('/generated/'.$name);
    }
}
