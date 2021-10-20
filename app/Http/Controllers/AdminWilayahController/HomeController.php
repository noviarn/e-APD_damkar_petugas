<?php

namespace App\Http\Controllers\AdminWilayahController;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard_aw');
    }
}
