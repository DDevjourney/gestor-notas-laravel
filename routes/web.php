<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notas', [NotasController::class, 'index'])->name('notas.index');
Route::get('/crear_nota', [NotasController::class, 'create'])->name('notas.create');
Route::post('/notas', [NotasController::class, 'store'])->name('notas.store');
Route::delete('/notas/{id}', [NotasController::class, 'destroy'])->name('notas.destro');
Route::get('/notas/{id}/edit', [NotasController::class, 'edit'])->name('notas.edit');
Route::put('/notas/{id}', [NotasController::class, 'update'])->name('notas.update');