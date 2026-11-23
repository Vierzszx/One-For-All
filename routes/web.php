<?php

use App\Http\Controllers\DashboardAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\KegiatanController;
use App\Http\Middleware\PastikanAdminLembaga;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [AutentikasiController::class, 'tampilkanLogin'])->name('login');

Route::post('/login', [AutentikasiController::class, 'prosesLogin']);

Route::view('/dashboard', 'dashboard')->middleware('auth')->name('dashboard');

Route::post('/logout', [AutentikasiController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/admin/kegiatan', [KegiatanController::class, 'index'])
    ->middleware(['auth', PastikanAdminLembaga::class])
    ->name('kegiatan.index');

Route::get('/admin/dashboard', [DashboardAdminController::class, 'index'])
    ->middleware(['auth', PastikanAdminLembaga::class])
    ->name('admin.dashboard');

Route::get('/admin/kegiatan/tambah', [KegiatanController::class, 'create'])
    ->middleware(['auth', PastikanAdminLembaga::class])
    ->name('kegiatan.create');

Route::post('/admin/kegiatan', [KegiatanController::class, 'store'])
    ->middleware(['auth', PastikanAdminLembaga::class])
    ->name('kegiatan.store');

Route::get('/admin/kegiatan/{id}/edit', [KegiatanController::class, 'edit'])
    ->middleware(['auth', PastikanAdminLembaga::class])
    ->whereNumber('id')
    ->name('kegiatan.edit');

Route::put('/admin/kegiatan{id}', [KegiatanController::class, 'update'])
    ->middleware(['auth', PastikanAdminLembaga::class])
    ->whereNumber('id')
    ->name('kegiatan.update');