<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Albums
Route::get('/albums', [AlbumController::class, 'index'])->name('albums.index');
Route::get('/albums/create', [AlbumController::class, 'create'])->name('albums.create');
Route::post('/albums', [AlbumController::class, 'store'])->name('albums.store');
Route::get('/albums/{id}', [AlbumController::class, 'show'])->name('albums.show');
Route::get('/albums/{id}/edit/', [AlbumController::class, 'edit'])->name('albums.edit');
Route::put('/albums/{id}/update/', [AlbumController::class, 'update'])->name('albums.update');
Route::patch('/albums/{id}/update', [AlbumController::class, 'update'])->name('albums.update');
Route::delete('/albums/{id}', [AlbumController::class, 'destroy'])->name('albums.delete');

//Authors
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');
Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
Route::get('/authors/{id}', [AuthorController::class, 'show'])->name('authors.show');
Route::get('/authors/{id}/edit/', [AuthorController::class, 'edit'])->name('authors.edit');
Route::put('/authors/{id}/update/', [AuthorController::class, 'update'])->name('authors.update');
Route::patch('/authors/{id}/update', [AuthorController::class, 'update'])->name('authors.update');
Route::delete('/authors/{id}', [AuthorController::class, 'destroy'])->name('authors.delete');

require __DIR__.'/auth.php';
