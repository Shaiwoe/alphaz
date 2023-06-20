<?php

namespace App\Http\Controllers\Home;

use App\Models\Catebory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CateboryController extends Controller
{
    public function show(Request $request, Catebory $catebory)
    {
        $articles = $catebory->books()->orderBy('created_at', 'desc')->where('is_active' , 1)->get();
        $articless = $catebory->books()->orderBy('created_at', 'ASC')->where('is_active' , 1)->get();
        $articlesss = $catebory->books()->orderBy('updated_at', 'desc')->where('is_active' , 1)->get();

        return view('home.catebories.show' , compact('articles', 'articless', 'articlesss' , 'catebory'));
    }
}
