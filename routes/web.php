<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/kategori/create');

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::inertia('dashboard', 'Dashboard')->name('dashboard');
// });

Route::get('/kategori/create', [App\Http\Controllers\KategoriController::class, 'create']);
Route::post('/kategori', [App\Http\Controllers\KategoriController::class, 'store']);

require __DIR__.'/settings.php';
