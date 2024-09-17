<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('hello');
});

Route::get('/blog/create', [BlogController::class, 'create']);

Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');

Route::get('/blog/all', [BlogController::class, 'index'])->name('blog.index');

Route::get('/blog/{id}/edit', [BlogController::class, 'show']);
Route::put('/blog/{id}', [BlogController::class, 'update']);