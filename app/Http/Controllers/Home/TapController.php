<?php

namespace App\Http\Controllers\Home;

use App\Models\Tap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Padcast;

class TapController extends Controller
{
    public function show(Request $request,Tap $tap)
    {

        $padcasts = DB::table('padcast_taps')->select('padcast_id')->where('tap_id', $tap->id)->pluck('padcast_id');

        $padcasts = Padcast::whereIn('id', $padcasts)->get();

        return view('home.taps.show' , compact('padcasts' , 'tap'));
    }
}
