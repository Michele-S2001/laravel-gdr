<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() {

        $items = Item::orderBy('name', 'ASC')->get();

        return response()->json ([
            'success' => true,
            'results' => $items
        ]);

    }
}
