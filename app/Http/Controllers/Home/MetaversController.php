<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Metavers;
use Illuminate\Http\Request;

class MetaversController extends Controller
{
    public function coins()
    {

        return view('home.metavers.index');

    }

    
}
