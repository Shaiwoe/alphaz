<?php

namespace App\Http\Controllers\Home;

use Carbon\Carbon;
use App\Models\Video;
use App\Models\Catevory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Stevebauman\Location\Facades\Location;

class VideoController extends Controller
{
    public function index(Video $videos)
    {

        $videos = Video::query()
            ->orderBy('created_at', 'desc')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);


        $videoCount = Video::query()
            ->orderBy('created_at', 'desc')
            ->where('is_active', 1)
            ->search()
            ->count();



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



        $slider = Video::where('created_at', '>=', Carbon::now()->subDays(360)->toDateTimeString())->orderBy('viewCount', 'desc')->take(6)->get()->toArray();
        $a = array_shift($slider);
        $b = array_shift($slider);
        $c = array_shift($slider);
        $d = array_shift($slider);
        $e = array_shift($slider);
        $f = array_shift($slider);

        $tavs = DB::select('select ANY_VALUE(a.title) as title, ANY_VALUE(a.slug) as slug, COUNT(b.tag_id) as total FROM tavs a inner join video_tags b ON b.tag_id = a.id group by b.tag_id order by total desc limit 15');


        return view('home.videos.index', compact('slider', 'a', 'b', 'c', 'd', 'e', 'f', 'tavs', 'videoCount', 'videos', 'videoss', 'videosss', 'videoView', 'videoViews'));
    }

    public function show(Video $video)
    {
        $ip = request()->ip();
        $location = Location::get($ip);

        $prev = Video::find($video->id - 1);
        $next = Video::find($video->id + 1);
        $videos = Video::orderBy('updated_at', 'desc')->where('is_active', 1)->inRandomOrder()->limit(4)->get();
        $video->increment('viewCount');
        return view('home.videos.show', compact('video', 'videos', 'prev', 'next', 'location'));
    }
}
