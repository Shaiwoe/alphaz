<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request, Article $article)
    {
        $articles = Article::query()
            ->orderBy('updated_at', 'desc')
            ->where('is_active', 1)
            ->search()
            ->paginate(9);


        

        $articleBanners = Article::orderBy('updated_at', 'desc')->where('is_active', 1)->take(2)->get();
        return view('home.articles.index', compact('articles', 'articleBanners'));
    }

    public function show(Article $article)
    {
        $categorys = Category::all();
        return view('home.articles.show', compact('article'));
    }
}
