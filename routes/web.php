<?php

use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return redirect('/');
});

//Albums
Route::get('/albums', [AlbumsController::class, 'index'])->name('albums.index');
Route::get('/albums/create', [AlbumsController::class, 'create'])->name('albums.create');
Route::post('/albums', [AlbumsController::class, 'store'])->name('albums.store');
Route::get('/albums/{id}', [AlbumsController::class, 'show'])->name('albums.show');
Route::get('/albums/{id}/edit/', [AlbumsController::class, 'edit'])->name('albums.edit');
Route::put('/albums/{id}/update/', [AlbumsController::class, 'update'])->name('albums.update');
Route::patch('/albums/{id}/update', [AlbumsController::class, 'update'])->name('albums.update');
Route::delete('/albums/{id}', [AlbumsController::class, 'destroy'])->name('albums.delete');

//Authors
Route::get('/authors', [AuthorsController::class, 'index'])->name('authors.index');
Route::get('/authors/create', [AuthorsController::class, 'create'])->name('authors.create');
Route::post('/authors', [AuthorsController::class, 'store'])->name('authors.store');
Route::get('/authors/{id}', [AuthorsController::class, 'show'])->name('authors.show');
Route::get('/authors/{id}/edit/', [AuthorsController::class, 'edit'])->name('authors.edit');
Route::put('/authors/{id}/update/', [AuthorsController::class, 'update'])->name('authors.update');
Route::patch('/authors/{id}/update', [AuthorsController::class, 'update'])->name('authors.update');
Route::delete('/authors/{id}', [AuthorsController::class, 'destroy'])->name('authors.delete');

require __DIR__.'/auth.php';
