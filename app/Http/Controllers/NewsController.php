<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

class NewsController extends Controller
{
    public function index()
    {
      $reports = Report::take(22)->get();

      return view('news', [
        'reports' => $reports,
      ]);
    }

    public function show($report)
    {
      $report = Report::find($report);

      return view('report', [
        'report' => $report,
      ]);
    }
}
