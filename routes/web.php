<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayersController;

Route::get('/w', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('insert');
});

Route::post('/insert', [PlayersController::class, 'store'])->name('players.store');

Route::get('/players', [PlayersController::class, 'index'])->name('players.index');

Route::delete('/players{player}', [PlayersController::class, 'update'])->name('players.update');

Route::delete('/players{player}', [PlayersController::class, 'destory'])->name('players.delete');
