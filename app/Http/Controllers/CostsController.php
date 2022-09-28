<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use Illuminate\Http\Request;

class CostsController extends Controller
{
    public function index()
    {
        $costs = Cost::where('user_id','=','1')->get();
        return view('auth.costs',compact('costs'));
    } 
}
