<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Church;

class ChurchController extends Controller
{
    public function index()
    {
      $churches = Church::take(22)->get();

      return view('churches', [
        'churches' => $churches,
      ]);
    }

    public function show($church)
    {
      $church = Church::find($church);

      return view('church', [
        'church' => $church,
      ]);
    }
}
