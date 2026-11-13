<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutentikasiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AutentikasiController::class, 'tampilkanLogin'])->name('login');

Route::post('/login', [AutentikasiController::class, 'prosesLogin']);

Route::view('/dashboard', 'dashboard')->middleware('auth')->name('dashboard');

Route::post('/logout', [AutentikasiController::class, 'logout'])->middleware('auth')->name('logout');

