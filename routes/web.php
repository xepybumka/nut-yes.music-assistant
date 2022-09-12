<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Albums
Route::get('/albums', [AlbumController::class, 'all'])->name('albums-all');
Route::get('/album/{id}', [AlbumController::class, 'get'])->name('album-get');
Route::get('/album/edit', [AlbumController::class, 'edit'])->name('album-edit');
Route::get('/album/create/{id}', [AlbumController::class, 'create'])->name('album-create');
Route::get('/album/delete/{id}', [AlbumController::class, 'delete'])->name('album-delete');

require __DIR__.'/auth.php';
