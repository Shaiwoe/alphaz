<?php

namespace App\Http\Controllers\Home;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function show(Request $request, Category $category)
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

        $tags = DB::select('select ANY_VALUE(a.title) as title, ANY_VALUE(a.slug) as slug, COUNT(b.tag_id) as total FROM tags a inner join article_tags b ON b.tag_id = a.id group by b.tag_id order by total desc limit 15');


        $tags = Tag::all();
        return view('home.categories.show', compact('tags', 'articles', 'articlesCount', 'articless', 'articlesss', 'articleView', 'articleViews'));
    }
}
