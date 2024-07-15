<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('principal');
Route::get('/games/create', [GameController::class, 'create'])->name('games.create');
Auth::routes();
// Rutas que requieren autenticación
Route::middleware('auth')->group(function () {
    Route::get('/games', [GameController::class, 'index'])->name('games.index');
    Route::get('/games/{game}', [GameController::class, 'show'])->name('games.show');
    Route::get('/games/{game}/edit', [GameController::class, 'edit'])->name('games.edit');
    Route::post('/games', [GameController::class, 'store'])->name('games.store');
    Route::put('/games/{game}', [GameController::class, 'update'])->name('games.update');
    Route::delete('/games/{game}', [GameController::class, 'destroy'])->name('games.destroy');
    Route::get('/games/{game}/export-pdf', [GameController::class, 'exportPdf'])->name('games.exportPdf');
// Ruta accesible sin autenticación

Route::get('/home', [App\Http\Controllers\GameController::class, 'index'])->name('home');
Route::get('/games/{id}', [GameController::class, 'show'])->name('games.show');
Route::get('/games/{id}/export-pdf', [GameController::class, 'exportPdf'])->name('games.exportPdf');});