<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChurchController extends Controller
{
    public function index()
    {
      return view('church');
    }

    public function show($name)
    {
      return view('/generated/'.$name);
    }
}
