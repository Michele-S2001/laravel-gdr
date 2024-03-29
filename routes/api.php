<?php

use App\Http\Controllers\Api\ItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CharacterController;
use App\Http\Controllers\Api\TypeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/characters', [CharacterController::class, 'index']);

Route::get('/characters/{character}', [CharacterController::class, 'show']);

Route::get('/items', [ItemController::class, 'index']);

Route::get('/types', [TypeController::class, 'index']);
