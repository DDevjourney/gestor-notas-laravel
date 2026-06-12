<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NotasController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('notas', NotasController::class)
    ->names([
        'index' => 'api.notas.index',
        'store' => 'api.notas.store',
        'show' => 'api.notas.show',
        'update' => 'api.notas.update',
        'destroy' => 'api.notas.destroy',
    ]);
