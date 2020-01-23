<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowBizController extends Controller
{
    public function index()
    {
      return view('showbiz');
    }
}
