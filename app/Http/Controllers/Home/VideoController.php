<?php

namespace App\Http\Controllers\Home;

use App\Models\Video;
use App\Models\Catevory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    public function index(Video $videos)
    {

        $videos = Video::query()
            ->orderBy('created_at', 'desc')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);



        $videoss = Video::query()
            ->orderBy('created_at', 'ASC')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);


        $videosss = Video::query()
            ->orderBy('updated_at', 'desc')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);



        $videoView = Video::query()
            ->orderBy('viewCount', 'desc')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);


        $videoViews = Video::query()
            ->orderBy('viewCount', 'ASC')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);



        $sevenArticle = Video::orderBy('created_at', 'desc')->where('is_active', 1)->take(1)->skip(1)->latest()->get();
        $sexArticle = Video::orderBy('created_at', 'desc')->where('is_active', 1)->take(1)->skip(2)->latest()->get();
        $fiveArticle = Video::orderBy('created_at', 'desc')->where('is_active', 1)->take(1)->skip(3)->latest()->get();
        $forArticle = Video::orderBy('created_at', 'desc')->where('is_active', 1)->take(1)->skip(4)->latest()->get();
        $threeArticle = Video::orderBy('created_at', 'desc')->where('is_active', 1)->take(1)->skip(5)->latest()->get();
        $twoArticle = Video::orderBy('created_at', 'desc')->where('is_active', 1)->take(1)->skip(6)->latest()->get();
        $oneArticle = Video::orderBy('created_at', 'desc')->where('is_active', 1)->take(1)->skip(7)->latest()->get();


        return view('home.videos.index', compact('videos', 'videoss', 'videosss', 'videoView', 'videoViews', 'sevenArticle', 'sexArticle', 'forArticle', 'fiveArticle', 'threeArticle', 'twoArticle', 'oneArticle'));
    }

    public function show(Video $video)
    {

        $prev = Video::find($video->id - 1);
        $next = Video::find($video->id + 1);


        $videos = Video::orderBy('updated_at', 'desc')->where('is_active', 1)->inRandomOrder()->limit(4)->get();
        $video->increment('viewCount');
        $catevorys = Catevory::all();
        return view('home.videos.show', compact('video', 'videos', 'catevorys', 'prev', 'next'));
    }
}
