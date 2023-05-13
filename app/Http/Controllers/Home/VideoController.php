<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(Video $videos)
    {
        $videos = Video::query()
            ->orderBy('updated_at', 'desc')
            ->where('is_active', 1)
            ->paginate(9);
        $videosBanners = Video::orderBy('created_at', 'desc')->take(1)->get();
        return view('home.videos.index' , compact('videos' , 'videosBanners'));
    }

    public function show(Video $video)
    {

        return view('home.videos.show' , compact('video'));
    }
}
