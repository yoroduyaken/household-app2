<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
  
    public function store(Request $request)
    {
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return redirect()->back();
        }
        
        return redirect()->route('home');
    }
}
