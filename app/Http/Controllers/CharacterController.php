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
        $data = $request->validate([
            "name" => "required|min:3|max:50",
            "bio" => "nullable|min:10",
            "def" => "required|numeric|min:0|max:255",
            "speed" => "required|numeric|min:0|max:255",
            "hp" => "required|numeric|min:0|max:5000",
        ]);

        $new_character = Character::create($data);
        return redirect()->route("characters.show", $new_character->id);
    }
    public function edit(Character $character)
    {
        return view("characters.edit", compact("character"));
    }

    public function update(Request $request, Character $character)
    {
        $data = $request->validate([
            "name" => "required|min:3|max:50",
            "bio" => "nullable|min:10",
            "def" => "required|numeric|min:0|max:255",
            "speed" => "required|numeric|min:0|max:255",
            "hp" => "required|numeric|min:0|max:5000",
        ]);
        $character->update($data);
        return redirect()->route('characters.show', $character->id);
    }

    public function destroy(Character $character)
    {
        $character->delete();
        return redirect()->route('characters.index');
    }
}
