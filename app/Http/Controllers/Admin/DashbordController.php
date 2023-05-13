<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use WisdomDiala\Cryptocap\Facades\Cryptocap;

class DashbordController extends Controller
{
    public function index()
    {

        return view('admin.dashboard');
    }
}
