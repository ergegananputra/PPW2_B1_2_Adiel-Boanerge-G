<?php

use Illuminate\Support\Facades\Route;

//route resource
Route::resource('/', \App\Http\Controllers\PostController::class);

Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [\App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [\App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
