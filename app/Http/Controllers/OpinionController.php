<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opinion;

class OpinionController extends Controller
{
    public function index()
    {
      $opinions = Opinion::take(16)->get();

      return view('opinions', [
        'opinions' => $opinions,
      ]);
    }

    public function show($opinion)
    {
      $opinion = Opinion::find($opinion);

      return view('opinion', [
        'opinion' => $opinion,
      ]);
    }
}
