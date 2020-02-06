<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sport;

class SportController extends Controller
{
    public function index()
    {
      return Sport::take(22)->get();
    }

    public function show(Sport $sport)
    {
      return $sport;
    }
}
