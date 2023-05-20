<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Padcast;
use App\Models\Video;
use WisdomDiala\Cryptocap\Facades\Cryptocap;

class DashbordController extends Controller
{
    public function index(Request $request)
    {
        $users = $request->user();

        $articles = Article::orderBy('updated_at', 'desc')->where('is_active' , 1)->take(4)->get();
        $videos = Video::orderBy('updated_at', 'desc')->where('is_active' , 1)->take(4)->get();
        $padcasts = Padcast::orderBy('updated_at', 'desc')->where('is_active' , 1)->take(4)->get();

        return view('admin.dashboard' , compact('users','articles','videos','padcasts'));
    }
}
