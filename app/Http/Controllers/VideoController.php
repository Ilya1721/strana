<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    public function index()
    {
      return Video::take(22)->get();
    }

    public function show(Video $video)
    {
      return $video;
    }

    public function right_bar()
    {
      return Video::take(1)->get();
    }
}
