<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Finance;

class FinanceController extends Controller
{
    public function index()
    {
      return Finance::take(22)->get();
    }

    public function show(Finance $finance)
    {
      return $finance;
    }
}
