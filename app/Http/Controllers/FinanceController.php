<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Finance;

class FinanceController extends Controller
{
    public function index()
    {
      $finances = Finance::take(22)->get();

      return view('finances', [
        'finances' => $finances,
      ]);
    }

    public function show($finance)
    {
      $finance = Finance::find($finance);

      return view('finance', [
        'finance' => $finance,
      ]);
    }
}
