<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pokemon;

class IndexController extends Controller
{
    public function find(Request $request) {
        $find = $request->input('pokemon');
        $data = Pokemon::where('name', 'like', $find)->first();
        if($data){
            return view('welcome')->with('data', $data);            
        }else{
            return view('home')->with('check', 0);
        }
    }
}
