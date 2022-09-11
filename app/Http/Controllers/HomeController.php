<?php

namespace App\Http\Controllers;


use App\Models\Cost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $costs = Cost::all();
        return view('home', compact('costs'));
    }

}
