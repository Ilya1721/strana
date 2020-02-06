<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opinion;

class OpinionController extends Controller
{
    public function index()
    {
      return Opinion::with('journalist')->take(16)->get();
    }

    public function show(Opinion $opinion)
    {
      return $opinion;
    }

    public function header()
    {
      return Opinion::with('journalist')->take(2)->get();
    }

    public function footer()
    {
      return Opinion::with('journalist')->take(4)->get();
    }
}
