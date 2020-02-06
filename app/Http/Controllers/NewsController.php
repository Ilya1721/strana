<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

class NewsController extends Controller
{
    public function index()
    {
      return Report::take(22)->get();
    }

    public function show(Report $report)
    {
      return $report;
    }

    public function right_bar()
    {
      return Report::take(5)->get();
    }
}
