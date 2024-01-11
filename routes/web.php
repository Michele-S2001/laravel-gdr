<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Character;
use App\Http\Controllers\Admin\CharacterController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {

        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('characters', CharacterController::class);
    });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
Route::get('/', [CharacterController::class, 'index'])->name('characters.index');

Route::get('/characters/create', [CharacterController::class, 'create'])->name('characters.create');

Route::get('/characters/{character}', [CharacterController::class, 'show'])->name('characters.show');

Route::post('/characters', [CharacterController::class, 'store'])->name('characters.store');

Route::get('/characters/{character}/edit', [CharacterController::class, 'edit'])->name('characters.edit');

Route::put('/characters/{character}', [CharacterController::class, 'update'])->name('characters.update');


Route::delete('/characters/{character}', [CharacterController::class, 'destroy'])->name('characters.destroy');
*/
require __DIR__ . '/auth.php';
