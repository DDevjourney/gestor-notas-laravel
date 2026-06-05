<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotasController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/notas', [App\Http\Controllers\NotasController::class, 'index']);

route::get('/crear_nota', [App\Http\Controllers\NotasController::class, 'create']);

route::post('/notas', [App\Http\Controllers\NotasController::class, 'store']);

Route::delete('/notas/{id}', [NotasController::class, 'destroy']);

Route::get('/notas/{id}/edit', [NotasController::class, 'edit']);

Route::put('/notas/{id}', [NotasController::class, 'update']);