<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    public function index()
    {
      $videos = Video::take(22)->get();

      return view('videos', [
        'videos' => $videos,
      ]);
    }

    public function show($video)
    {
      $video = Video::find($video);

      return view('video', [
        'video' => $video,
      ]);
    }
}
