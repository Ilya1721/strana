<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Church;

class ChurchController extends Controller
{
    public function index()
    {
      return Church::take(22)->get();
    }

    public function show(Church $church)
    {
      return $church;
    }
}
