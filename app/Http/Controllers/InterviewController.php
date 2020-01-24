<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterviewController extends Controller
{
    public function index()
    {
      return view('interviews');
    }

    public function show($name)
    {
      return view('/generated/'.$name);
    }
}
