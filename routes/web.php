<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('games', GameController::class);

Route::get('/games/{id}', [GameController::class, 'show'])->name('games.show');

Route::get('/games/{id}/export-pdf', [GameController::class, 'exportPdf'])->name('games.exportPdf');
