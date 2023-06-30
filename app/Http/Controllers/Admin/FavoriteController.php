<?php

namespace App\Http\Controllers\Admin;

use App\Models\Video;
use App\Models\Article;
use App\Models\Padcast;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FavoriteController extends Controller
{
    public function index(Request $request)
    {
        $users = $request->user();
        $articles = Article::orderBy('updated_at', 'desc')->where('is_active', 1)->take(8)->get();
        $padcasts = Padcast::orderBy('updated_at', 'desc')->where('is_active', 1)->take(4)->get();
        $videos = Video::orderBy('updated_at', 'desc')->where('is_active', 1)->take(4)->get();

        return view('manager.favorite', compact('users', 'articles', 'videos', 'padcasts'));
    }
}
