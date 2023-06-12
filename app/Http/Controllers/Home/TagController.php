<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show(Request $request,Tag $tag)
    {
        $articles = $tag->articles()->orderBy('created_at', 'desc')->where('is_active' , 1)->get();

        return view('home.tags.show' , compact('articles' , 'tag'));
    }
}
