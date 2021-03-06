<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Pokemon;

class PokemonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit($id) {
        return view('editdata')->with('data', Pokemon::find($id));
    }

    public function update(Request $request, $id) {
        $update = Pokemon::find($id);
        $update->fill($request->all());
        $update->save();
        return redirect('/console');
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $pokemon = new Pokemon();
        $pokemon->fill($request->all());
        return redirect('/console');
    }

}

