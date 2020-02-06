<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interview;

class InterviewController extends Controller
{
    public function index()
    {
      return Interview::take(22)->get();
    }

    public function show(Interview $interview)
    {
      return $interview;
    }
}
