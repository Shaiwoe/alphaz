<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request, Article $article)
    {
        $articles = Article::query()
            ->orderBy('created_at', 'desc')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);



        $articless = Article::query()
            ->orderBy('created_at', 'ASC')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);


        $articlesss = Article::query()
            ->orderBy('updated_at', 'desc')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);



        $articleView = Article::query()
            ->orderBy('viewCount', 'desc')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);


        $articleViews = Article::query()
            ->orderBy('viewCount', 'ASC')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);





        $sevenArticle = Article::orderBy('created_at', 'desc')->where('is_active', 1)->take(1)->skip(1)->latest()->get();
        $sexArticle = Article::orderBy('created_at', 'desc')->where('is_active', 1)->take(1)->skip(2)->latest()->get();
        $fiveArticle = Article::orderBy('created_at', 'desc')->where('is_active', 1)->take(1)->skip(3)->latest()->get();
        $forArticle = Article::orderBy('created_at', 'desc')->where('is_active', 1)->take(1)->skip(4)->latest()->get();
        $threeArticle = Article::orderBy('created_at', 'desc')->where('is_active', 1)->take(1)->skip(5)->latest()->get();
        $twoArticle = Article::orderBy('created_at', 'desc')->where('is_active', 1)->take(1)->skip(6)->latest()->get();
        $oneArticle = Article::orderBy('created_at', 'desc')->where('is_active', 1)->take(1)->skip(7)->latest()->get();

        $tags = Tag::orderBy('created_at', 'desc')->take(20)->latest()->get();

        return view('home.articles.index', compact('tags', 'articles', 'articless', 'articlesss', 'articleView', 'articleViews', 'sevenArticle', 'sexArticle', 'forArticle', 'fiveArticle', 'threeArticle', 'twoArticle', 'oneArticle'));
    }

    public function show(Article $article)
    {
        $prev = Article::find($article->id - 1);
        $next = Article::find($article->id + 1);


        $articles = Article::orderBy('updated_at', 'desc')->where('is_active', 1)->inRandomOrder()->limit(4)->get();
        $article->increment('viewCount');
        $categorys = Category::all();
        $tags = Tag::all();
        return view('home.articles.show', compact('article', 'articles', 'tags', 'categorys', 'prev', 'next'));
    }
}
