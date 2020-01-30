<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sport;

class SportController extends Controller
{
    public function index()
    {
      $sports = Sport::take(22)->get();

      return view('sports', [
        'sports' => $sports,
      ]);
    }

    public function show($sport)
    {
      $sport = Sport::find($sport);

      return view('sport', [
        'sport' => $sport,
      ]);
    }
}
