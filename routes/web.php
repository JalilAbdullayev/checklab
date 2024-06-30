<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('about', [FrontController::class, 'about'])->name('about');
Route::get('blog', [FrontController::class, 'blog'])->name('blog');
Route::prefix('contact')->name('contact')->group(function() {
    Route::get('/', [FrontController::class, 'contact']);
    Route::post('/', [MessageController::class, 'store']);
});
Route::post('subscribe', [SubscriberController::class, 'store'])->name('subscribe');

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::prefix('settings')->name('settings')->group(function() {
        Route::get('/', [SettingsController::class, 'index']);
        Route::post('/', [SettingsController::class, 'update']);
    });

    Route::prefix('contact')->name('contact')->group(function() {
        Route::get('/', [ContactController::class, 'index']);
        Route::post('/', [ContactController::class, 'update']);
    });

    Route::prefix('messages')->name('messages.')->group(function() {
        Route::get('/', [MessageController::class, 'index'])->name('index');
        Route::get('message/{id}', [MessageController::class, 'show'])->name('show');
        Route::get('delete/{id}', [MessageController::class, 'delete'])->name('delete');
    });

    Route::prefix('subscribers')->name('subscribers.')->group(function() {
        Route::get('/', [SubscriberController::class, 'index'])->name('index');
        Route::get('delete/{id}', [SubscriberController::class, 'delete'])->name('delete');
    });

    Route::prefix('about')->name('about')->group(function() {
        Route::get('/', [AboutController::class, 'index']);
        Route::post('/', [AboutController::class, 'update']);
    });
    Route::prefix('laravel-filemanager')->middleware(['web', 'auth'])->group(static function() {
        Lfm::routes();
    });
});

Auth::routes();
