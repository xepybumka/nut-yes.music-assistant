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
Route::get('/albums', [AlbumController::class, 'all'])->name('albums-all');
Route::get('/album/{id}', [AlbumController::class, 'get'])->name('album-detail');
Route::get('/album/edit', [AlbumController::class, 'edit'])->name('album-edit');
Route::get('/album/create/{id}', [AlbumController::class, 'create'])->name('album-create');
Route::get('/album/delete/{id}', [AlbumController::class, 'delete'])->name('album-delete');

//Authors
Route::get('/authors', [AuthorController::class, 'all'])->name('authors-all');
Route::get('/author/{id}', [AuthorController::class, 'get'])->name('author-detail');
Route::get('/author/edit/{id}', [AuthorController::class, 'edit'])->name('author-edit');
Route::get('/author/create', [AuthorController::class, 'create'])->name('author-create');
Route::get('/author/delete/{id}', [AuthorController::class, 'delete'])->name('author-delete');
require __DIR__.'/auth.php';
