<?php

namespace App\Http\Controllers\Home;

use App\Models\Catepory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CateporyController extends Controller
{
    public function show(Request $request, Catepory $catepory)
    {
        $articles = $catepory->padcasts()->orderBy('created_at', 'desc')->where('is_active' , 1)->get();
        $articless = $catepory->padcasts()->orderBy('created_at', 'ASC')->where('is_active' , 1)->get();
        $articlesss = $catepory->padcasts()->orderBy('updated_at', 'desc')->where('is_active' , 1)->get();

        return view('home.catepories.show' , compact('articles', 'articless', 'articlesss' , 'catepory'));
    }
}
