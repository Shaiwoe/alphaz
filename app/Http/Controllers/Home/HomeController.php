<?php

namespace App\Http\Controllers\Home;

use App\Models\Banner;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index()
    {

        $rightBanners = Banner::where('type', 'right')->where('is_active' , 1)->get();
        $leftBanners = Banner::where('type', 'left')->where('is_active' , 1)->get();
        $articles = Article::orderBy('updated_at', 'desc')->where('is_active' , 1)->take(8)->get();
        return view('home.index' , compact('rightBanners' , 'leftBanners' , 'articles'));
    }


}
