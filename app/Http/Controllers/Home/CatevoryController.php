<?php

namespace App\Http\Controllers\Home;

use App\Models\Catevory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatevoryController extends Controller
{
    public function show(Request $request,Catevory $catevory)
    {
        $articles = $catevory->videos()->orderBy('created_at', 'desc')->where('is_active' , 1)->get();
        $articless = $catevory->videos()->orderBy('created_at', 'ASC')->where('is_active' , 1)->get();
        $articlesss = $catevory->videos()->orderBy('updated_at', 'desc')->where('is_active' , 1)->get();

        return view('home.catevories.show' , compact('articles', 'articless', 'articlesss' , 'catevory'));
    }
}
