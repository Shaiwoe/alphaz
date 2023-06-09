<?php

namespace App\Http\Controllers\Home;

use Carbon\Carbon;
use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(Request $request, Article $article)
    {
        $articles = Article::query()
            ->orderBy('created_at', 'desc')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);

        $articlesCount = Article::query()
            ->orderBy('created_at', 'desc')
            ->where('is_active', 1)
            ->search()
            ->count();



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




        $slider = Article::where('created_at', '>=', Carbon::now()->subDays(360)->toDateTimeString())->orderBy('viewCount' , 'desc')->take(6)->get()->toArray();
        $a = array_shift($slider);
        $b = array_shift($slider);
        $c = array_shift($slider);
        $d = array_shift($slider);
        $e = array_shift($slider);
        $f = array_shift($slider);




        $tags = DB::select('select ANY_VALUE(a.title) as title, ANY_VALUE(a.slug) as slug, COUNT(b.tag_id) as total FROM tags a inner join article_tags b ON b.tag_id = a.id group by b.tag_id order by total desc limit 15');

        return view('home.articles.index', compact('slider' ,'a' , 'b' , 'c' , 'd' , 'e' , 'f' , 'tags', 'articles', 'articlesCount', 'articless', 'articlesss', 'articleView', 'articleViews'));
    }

    public function show(Article $article)
    {
        $prev = Article::find($article->id - 1);
        $next = Article::find($article->id + 1);


        $articles = Article::orderBy('updated_at', 'desc')->where('is_active', 1)->inRandomOrder()->limit(4)->get();
        $article->increment('viewCount');
        $tags = DB::select('select ANY_VALUE(a.title) as title, ANY_VALUE(a.slug) as slug, COUNT(b.tag_id) as total FROM tags a inner join article_tags b ON b.tag_id = a.id group by b.tag_id order by total desc limit 15');
        return view('home.articles.show', compact('article', 'articles', 'tags',  'prev', 'next'));
    }


    // public function time($time) {
    //     $articles = Article::where('time', $time)->get();

    //     return view('home.articles.time' , compact('articles'));
    // }
}
