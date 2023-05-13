<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Padcast;
use Illuminate\Http\Request;

class PadcastController extends Controller
{
    public function index(Padcast $padcasts)
    {
        $padcasts = Padcast::query()
            ->orderBy('updated_at', 'desc')
            ->where('is_active', 1)
            ->paginate(9);
        $padcastsBanners = Padcast::orderBy('created_at', 'desc')->take(1)->get();
        return view('home.padcasts.index' , compact('padcasts' , 'padcastsBanners'));
    }

    public function show(Padcast $padcast)
    {

        return view('home.padcasts.show' , compact('padcast'));
    }
}
