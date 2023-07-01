<?php

namespace App\Http\Controllers\Home;

use App\Models\Tav;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TavController extends Controller
{
    public function show(Request $request,Tav $tav)
    {

        $videos = DB::table('video_tavs')->select('video_id')->where('tav_id', $tav->id)->pluck('video_id');

        $videos = Video::whereIn('id', $videos)->get();

        return view('home.tavs.show' , compact('videos' , 'tav'));
    }
}
