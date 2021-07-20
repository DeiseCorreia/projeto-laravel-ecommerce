<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function dashboard()
    {
        if(Auth::check() === true){
            return view('home');
        }

        return redirect('/admin.home');
    }
    public function show(Request $request)
    {
        return view('admin.show');
    }
}
