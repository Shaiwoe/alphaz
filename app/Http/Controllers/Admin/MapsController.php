<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapsController extends Controller
{
    public function index(Request $request)
    {
        $users = $request->user();

        return view('manager.maps', compact('users'));
    }
}
