<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CostsController extends Controller
{
    public function index()
    {
        $costs = Cost::where('user_id', Auth::user()->id)->get();
        return view('costs',compact('costs'));
    } 

    public function show()
    {
        $cost = Cost::find(1);
        return view('costs.show', with(['cost' => $cost]));
        // return view('costs.show',compact('cost'));
    }
}
