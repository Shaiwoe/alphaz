<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use DB;
use App\Models\Article;

class TagController extends Controller
{
    public function show(Request $request,Tag $tag)
    {
        #$articles = $tag->articles()->orderBy('created_at', 'desc')->where('is_active' , 1)->get();


        $articles = DB::table('article_tags')->select('article_id')->where('tag_id', $tag->id)->pluck('article_id');

        $articles = Article::whereIn('id', $articles)->get();

        return view('home.tags.show' , compact('articles' , 'tag'));
    }
}
