<?php

namespace App\Http\Controllers\AdminWilayahController;

use Illuminate\Http\Request;
//use App\Models\SudinSelatanModel;

class SudinSelatan extends Controller
{
    public function index()
    {
        return view('AdminWilayah.sudinselatan');
    }
}
