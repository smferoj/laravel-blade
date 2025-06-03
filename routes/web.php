<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/create-categories', [CategoryController::class, 'createCategory'])->name('category.create');
Route::post('/create-categories', [CategoryController::class, 'storeCategory'])->name('category.store');
