<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store()
    {
        return redirect()->route('home');
    }
}
