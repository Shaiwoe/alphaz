<?php

namespace App\Http\Controllers\Home;

use App\Models\Tap;
use App\Models\Padcast;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PadcastController extends Controller
{
    public function index(Request $request, Padcast $padcasts)
    {
        $articles = Padcast::query()
            ->orderBy('created_at', 'desc')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);

        $articlesCount = Padcast::query()
            ->orderBy('created_at', 'desc')
            ->where('is_active', 1)
            ->search()
            ->count();


        $articless = Padcast::query()
            ->orderBy('created_at', 'ASC')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);


        $articlesss = Padcast::query()
            ->orderBy('updated_at', 'desc')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);



        $articleView = Padcast::query()
            ->orderBy('viewCount', 'desc')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);


        $articleViews = Padcast::query()
            ->orderBy('viewCount', 'ASC')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);



        $sevenArticle = Padcast::orderBy('created_at', 'desc')->where('is_active', 1)->take(1)->skip(1)->latest()->get();
        $sexArticle = Padcast::orderBy('created_at', 'desc')->where('is_active', 1)->take(1)->skip(2)->latest()->get();
        $fiveArticle = Padcast::orderBy('created_at', 'desc')->where('is_active', 1)->take(1)->skip(3)->latest()->get();
        $forArticle = Padcast::orderBy('created_at', 'desc')->where('is_active', 1)->take(1)->skip(4)->latest()->get();
        $threeArticle = Padcast::orderBy('created_at', 'desc')->where('is_active', 1)->take(1)->skip(5)->latest()->get();
        $twoArticle = Padcast::orderBy('created_at', 'desc')->where('is_active', 1)->take(1)->skip(6)->latest()->get();
        $oneArticle = Padcast::orderBy('created_at', 'desc')->where('is_active', 1)->take(1)->skip(7)->latest()->get();

        $taps = Tap::orderBy('created_at', 'desc')->inRandomOrder()->limit(15)->get();

        return view('home.padcasts.index', compact('taps', 'articles', 'articlesCount', 'articless', 'articlesss', 'articleView', 'articleViews', 'sevenArticle', 'sexArticle', 'forArticle', 'fiveArticle', 'threeArticle', 'twoArticle', 'oneArticle'));
    }

    public function show(Padcast $padcast)
    {

        return view('home.padcasts.show', compact('padcast'));
    }
}
