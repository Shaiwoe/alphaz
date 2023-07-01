<?php

namespace App\Http\Controllers\Home;

use App\Models\Padcast;
use App\Models\Catepory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CateporyController extends Controller
{
    public function show(Request $request, Catepory $catepory)
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


        $taps = DB::select('select ANY_VALUE(a.title) as title, ANY_VALUE(a.slug) as slug, COUNT(b.tag_id) as total FROM tags a inner join article_tags b ON b.tag_id = a.id group by b.tag_id order by total desc limit 15');

        return view('home.catepories.show', compact('taps', 'padcasts', 'padcastCount', 'padcastss', 'padcastsss', 'padcastView', 'padcastView' , 'catevory'));
    }
}
