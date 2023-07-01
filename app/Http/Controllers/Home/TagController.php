<?php

namespace App\Http\Controllers\Home;

use App\Models\Tag;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function show(Request $request,Tag $tag)
    {
    
        $articles = DB::table('article_tags')->select('article_id')->where('tag_id', $tag->id)->pluck('article_id');

        $articles = Article::whereIn('id', $articles)->get();

        return view('home.tags.show' , compact('articles' , 'tag'));
    }
}
