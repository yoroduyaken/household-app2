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
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
       ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return redirect()->back();
        } 

        $request->session()->regenerate();    
        return redirect()->route('home');
    }
}
