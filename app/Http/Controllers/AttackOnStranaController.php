<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AtakaNaStranu;

class AttackOnStranaController extends Controller
{
    public function index()
    {
      return AtakaNaStranu::take(22)->get();
    }

    public function show(AtakaNaStranu $attack)
    {
      return $attack;
    }
}
