<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttackOnStranaController extends Controller
{
    public function index()
    {
      return view('attacks');
    }

    public function show($name)
    {
      return view('/generated/'.$name);
    }
}
