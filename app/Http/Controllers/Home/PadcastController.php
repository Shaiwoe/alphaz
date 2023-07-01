<?php

namespace App\Http\Controllers\Home;

use Carbon\Carbon;
use App\Models\Tap;
use App\Models\Padcast;
use App\Models\Catepory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PadcastController extends Controller
{
    public function index(Request $request, Padcast $padcasts)
    {
        $padcasts = Padcast::query()
            ->orderBy('created_at', 'desc')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);

        $padcastCount = Padcast::query()
            ->orderBy('created_at', 'desc')
            ->where('is_active', 1)
            ->search()
            ->count();


        $padcastss = Padcast::query()
            ->orderBy('created_at', 'ASC')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);


        $padcastsss = Padcast::query()
            ->orderBy('updated_at', 'desc')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);



        $padcastView = Padcast::query()
            ->orderBy('viewCount', 'desc')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);


        $padcastViews = Padcast::query()
            ->orderBy('viewCount', 'ASC')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);



        $slider = Padcast::where('created_at', '>=', Carbon::now()->subDays(360)->toDateTimeString())->orderBy('viewCount', 'desc')->take(6)->get()->toArray();
        $a = array_shift($slider);
        $b = array_shift($slider);
        $c = array_shift($slider);
        $d = array_shift($slider);
        $e = array_shift($slider);
        $f = array_shift($slider);


        $taps = DB::select('select ANY_VALUE(a.title) as title, ANY_VALUE(a.slug) as slug, COUNT(b.tag_id) as total FROM tags a inner join padcast_tags b ON b.tag_id = a.id group by b.tag_id order by total desc limit 15');

        return view('home.padcasts.index', compact('slider' ,'a' , 'b' , 'c' , 'd' , 'e' , 'f' , 'taps', 'padcasts', 'padcastCount', 'padcastss', 'padcastsss', 'padcastView', 'padcastViews'));
    }

    public function show(Padcast $padcast)
    {

        $prev = Padcast::orderBy('created_at', 'desc')->find($padcast->id - 1);
        $next = Padcast::orderBy('created_at', 'desc')->find($padcast->id + 1);


        $padcasts = Padcast::orderBy('updated_at', 'desc')->where('is_active', 1)->inRandomOrder()->limit(4)->get();
        $padcast->increment('viewCount');
        $taps = DB::select('select ANY_VALUE(a.title) as title, ANY_VALUE(a.slug) as slug, COUNT(b.tag_id) as total FROM tags a inner join article_tags b ON b.tag_id = a.id group by b.tag_id order by total desc limit 15');
        return view('home.padcasts.show', compact('padcast', 'padcasts', 'taps', 'prev', 'next'));
    }
}
