<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Request $request,Category $category)
    {
        $articles = $category->articles()->orderBy('updated_at', 'desc')->where('is_active' , 1)->get();

        return view('home.categories.show' , compact('articles' , 'category'));
    }
}
