<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotasController;

Route::get('/', function () {
    return view('welcome');
});



Route::post('/logout', [AuthController::class, 'Logout'])->name('logout');

Route::middleware('guest')->controller(AuthController::class)->group(function (){
Route::get('/register', 'showRegister')->name('show.register');
Route::get('/login', 'showLogin')->name('show.login');
Route::post('/register', 'Register')->name('register');
Route::post('/login', 'Login')->name('login');
});


Route::middleware('auth')->controller(NotasController::class)->group(function () {
    Route::get('/notas', 'index')->name('notas.index');
    Route::get('/crear_nota', 'create')->name('notas.create');
    Route::post('/notas', 'store')->name('notas.store');
    Route::delete('/notas/{nota}', 'destroy')->name('notas.destro');
    Route::get('/notas/{nota}/edit', 'edit')->name('notas.edit');
    Route::put('/notas/{nota}', 'update')->name('notas.update');

});
