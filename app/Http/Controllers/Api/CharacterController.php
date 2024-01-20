<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;


class CharacterController extends Controller
{
    public function index(Request $request) {

        $data = $request->validate([
            'arrFilteredTypes' => "nullable|exists:items,id"
        ]);

        if($request->has('arrFilteredTypes')) {
            $query = Character::whereIn('type_id', $data['arrFilteredTypes'])->with('type');
        } else {
            $query = Character::with('type');
        }

        $characters = $query->get();

        return response()->json ([
            'success' => true,
            'results' => $characters
        ]);
    }

    public function show(Character $character) {

        $character->load('items', 'type');
        return response()->json ([
            'success' => true,
            'result' => $character,
        ]);
    }
}
