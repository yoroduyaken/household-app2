<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cost;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CostRequest;

class CostController extends Controller
{
    public function index()
    {
        $cost = Cost::all();
        return view ('cost');
    } 
    
    public function store(CostRequest $request)
    {
        
        $user_id = Auth::id();

        $cost = Cost::create([
            'name' => $request->name,
            'user_id' => $user_id,
            'title' => $request->title,
            'amount'=> $request->amount,
            'memo' => $request->memo,
        ]);
        
        return redirect()->route('home');
    }
}
