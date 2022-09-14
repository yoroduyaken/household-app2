<?php

namespace App\Http\Controllers;


use App\Models\Cost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $costs = Cost::all();
        $costs = Cost::orderBy('id', 'desc')->get();
        return view('home', compact('costs'));
        // return view('home', with(['costs' => $all_costs]));
    }

}
