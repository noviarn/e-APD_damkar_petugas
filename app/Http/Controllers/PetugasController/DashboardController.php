<?php

namespace App\Http\Controllers\PetugasController;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function berandaPetugas()
    {
    	return view('petugas.dashboard');
    }
}
