<?php

use App\Models\Character;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CharacterController::class, 'index'])->name('characters.index');

Route::get('/characters/create', [CharacterController::class, 'create'])->name('characters.create');

Route::get('/characters/{character}', [CharacterController::class, 'show'])->name('characters.show');

Route::post('/characters', [CharacterController::class, 'store'])->name('characters.store');

Route::get('/characters/{character}/edit', [CharacterController::class, 'edit'])->name('characters.edit');
