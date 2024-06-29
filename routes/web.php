<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('about', [FrontController::class, 'about'])->name('about');
Route::get('blog', [FrontController::class, 'blog'])->name('blog');
Route::get('contact', [FrontController::class, 'contact'])->name('contact');

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('index');
});
