<?php

namespace App\Http\Controllers\Home;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function show(Request $request,Category $category)
    {
        $articles = $category->articles()->orderBy('created_at', 'desc')->where('is_active' , 1)->get();
        $articless = $category->articles()->orderBy('created_at', 'ASC')->where('is_active' , 1)->get();
        $articlesss = $category->articles()->orderBy('updated_at', 'desc')->where('is_active' , 1)->get();


        $tags = Tag::all();
        return view('home.categories.show' , compact('articles', 'articless', 'articlesss' , 'category' , 'tags'));
    }
}
