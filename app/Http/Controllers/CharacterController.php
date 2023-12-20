<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::all();
        return view("characters.index", compact("characters"));
    }

    public function show(Character $character)
    {

        return view("characters.show", compact("character"));
    }

    public function create()
    {
        return view('characters.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $new_character = Character::create($data);
        return redirect()->route("characters.show", $new_character->id);
    }
    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
