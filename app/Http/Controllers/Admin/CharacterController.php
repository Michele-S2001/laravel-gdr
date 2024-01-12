<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Type;
use App\Models\Item;

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
        $types = Type::all();

        $items = Item::all();

        return view('admin.characters.create', compact('types', 'items'));
    }

    public function store(Request $request)
    {
   
        $data = $request->validate([
            "name" => "required|min:3|max:50",
            "type_id" => "required|exists:types,id",
            "bio" => "nullable|min:10",
            "def" => "required|numeric|min:0|max:255",
            "speed" => "required|numeric|min:0|max:255",
            "hp" => "required|numeric|min:0|max:5000",
            "items" => "exists:items,id"
        ]);



        $new_character = Character::create($data);

        if ($request->has('items')) {           
            $new_character->items()->attach($data['items']);
        }


        return redirect()->route("admin.characters.show", $new_character->id);


    }
    public function edit(Character $character)
    {
        $types = Type::all();
        $items = Item::all();
        return view("admin.characters.edit", compact("character", "types", "items"));
    }

    public function update(Request $request, Character $character)
    {
        $data = $request->validate([
            "name" => "required|min:3|max:50",
            "type_id" => "required|exists:types,id",
            "bio" => "nullable|min:10",
            "def" => "required|numeric|min:0|max:255",
            "speed" => "required|numeric|min:0|max:255",
            "hp" => "required|numeric|min:0|max:5000",
            "items" => "exists:items,id"
        ]);

        $character->update($data);

        if ($request->has('items')) {           
            $character->items()->sync($data['items']);
        } else {
            $character->items()->detach();
        }

        return redirect()->route('admin.characters.show', $character->id);

        
    }

    public function destroy(Character $character)
    {
        $character->delete();
        return redirect()->route('admin.characters.index');
    }
}
