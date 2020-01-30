<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interview;

class InterviewController extends Controller
{
    public function index()
    {
      $interviews = Interview::take(22)->get();

      return view('interviews', [
        'interviews' => $interviews,
      ]);
    }

    public function show($interview)
    {
      $interview = Interview::find($interview);

      return view('interview', [
        'interview' => $interview,
      ]);
    }
}
