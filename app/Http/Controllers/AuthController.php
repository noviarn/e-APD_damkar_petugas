<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
    	return view('/login');
    }

    public function postlogin(Request $request)
    {
    	if(Auth::attempt($request->only('nrk','password'))){
            return redirect('/petugas/dashboard');
        }
        return redirect()->back()->with('alert', 'NRK/Kata sandi salah!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
