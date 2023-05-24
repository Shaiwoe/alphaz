<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VipController extends Controller
{
    public function index(Request $request)
    {
        $users = $request->user();

        return view('admin.vip', compact('users'));
    }
}
