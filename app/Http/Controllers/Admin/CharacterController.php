<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::all();
        return view("admin.characters.index", compact("characters"));
    }

    public function show(Character $character)
    {

        return view("admin.characters.show", compact("character"));
    }

    public function create()
    {
        return view('admin.characters.create');
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
        return redirect()->route("admin.characters.show", $new_character->id);
    }
    public function edit(Character $character)
    {
        return view("admin.characters.edit", compact("character"));
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
        return redirect()->route('admin.characters.show', $character->id);
    }

    public function destroy(Character $character)
    {
        $character->delete();
        return redirect()->route('admin.characters.index');
    }
}