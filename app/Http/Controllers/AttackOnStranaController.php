<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AtakaNaStranu;

class AttackOnStranaController extends Controller
{
    public function index()
    {
      $attacks = AtakaNaStranu::take(22)->get();

      return view('attacks', [
        'attacks' => $attacks,
      ]);
    }

    public function show($attack)
    {
      $attack = AtakaNaStranu::find($attack);

      return view('attack', [
        'attack' => $attack,
      ]);
    }
}
