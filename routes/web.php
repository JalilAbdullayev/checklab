<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Blog\BlogCategoryController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Blog\BlogTagController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Products\ProductCategoryController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Products\ProductTagController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SubscriberController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Moderator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('about', [FrontController::class, 'about'])->name('about');

Route::prefix('blog')->name('blog.')->group(function() {
    Route::get('/', [FrontController::class, 'blog'])->name('index');
    Route::get('{slug}', [FrontController::class, 'blogDetail'])->name('detail');
    Route::get('category/{slug}', [FrontController::class, 'categories'])->name('category');
    Route::get('tag/{slug}', [FrontController::class, 'tags'])->name('tag');
});

Route::get('product/{slug}', [FrontController::class, 'productDetail'])->name('product');

Route::prefix('cart')->name('cart.')->middleware('auth')->group(function() {
    Route::get('/', [CartController::class, 'index'])->name('index');
    Route::post('store/{id}', [CartController::class, 'store'])->name('store');
    Route::get('delete/{id}', [CartController::class, 'delete'])->name('delete');
    Route::post('update/{id}', [CartController::class, 'update'])->name('update');
    Route::get('empty', [CartController::class, 'empty'])->name('empty');
    Route::post('submit', [CartController::class, 'submit'])->name('submit');
});

Route::prefix('contact')->name('contact')->group(function() {
    Route::get('/', [FrontController::class, 'contact']);
    Route::post('/', [MessageController::class, 'store']);
});

Route::post('subscribe', [SubscriberController::class, 'store'])->name('subscribe');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::prefix('settings')->name('settings')->middleware(Admin::class)->group(function() {
        Route::get('/', [SettingsController::class, 'index']);
        Route::post('/', [SettingsController::class, 'update']);
    });

    Route::middleware(Moderator::class)->group(function() {
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

        Route::prefix('blog')->name('blog.')->group(function() {
            Route::get('/', [BlogController::class, 'index'])->name('index');

            Route::prefix('create')->name('create')->group(function() {
                Route::get('/', [BlogController::class, 'create']);
                Route::post('/', [BlogController::class, 'store']);
            });

            Route::prefix('edit/{id}')->name('edit')->group(function() {
                Route::get('/', [BlogController::class, 'edit']);
                Route::post('/', [BlogController::class, 'update']);
            });

            Route::get('delete/{id}', [BlogController::class, 'delete'])->name('delete');

            Route::prefix('category')->name('category.')->group(function() {
                Route::prefix('/')->name('index')->group(function() {
                    Route::get('/', [BlogCategoryController::class, 'index']);
                    Route::post('/', [BlogCategoryController::class, 'store']);
                });

                Route::prefix('edit/{id}')->name('edit')->group(function() {
                    Route::get('/', [BlogCategoryController::class, 'edit']);
                    Route::post('/', [BlogCategoryController::class, 'update']);
                });

                Route::get('delete/{id}', [BlogCategoryController::class, 'delete'])->name('delete');
            });

            Route::prefix('tag')->name('tag.')->group(function() {
                Route::prefix('/')->name('index')->group(function() {
                    Route::get('/', [BlogTagController::class, 'index']);
                    Route::post('/', [BlogTagController::class, 'store']);
                });

                Route::prefix('edit/{id}')->name('edit')->group(function() {
                    Route::get('/', [BlogTagController::class, 'edit']);
                    Route::post('/', [BlogTagController::class, 'update']);
                });

                Route::get('delete/{id}', [BlogTagController::class, 'delete'])->name('delete');
            });
        });

        Route::prefix('products')->name('products.')->group(function() {
            Route::get('/', [ProductController::class, 'index'])->name('index');

            Route::prefix('create')->name('create')->group(function() {
                Route::get('/', [ProductController::class, 'create']);
                Route::post('/', [ProductController::class, 'store']);
            });

            Route::prefix('edit/{id}')->name('edit')->group(function() {
                Route::get('/', [ProductController::class, 'edit']);
                Route::post('/', [ProductController::class, 'update']);
            });

            Route::get('delete/{id}', [ProductController::class, 'delete'])->name('delete');

            Route::prefix('category')->name('category.')->group(function() {
                Route::prefix('/')->name('index')->group(function() {
                    Route::get('/', [ProductCategoryController::class, 'index']);
                    Route::post('/', [ProductCategoryController::class, 'store']);
                });

                Route::prefix('edit/{id}')->name('edit')->group(function() {
                    Route::get('/', [ProductCategoryController::class, 'edit']);
                    Route::post('/', [ProductCategoryController::class, 'update']);
                });
                Route::get('delete/{id}', [ProductCategoryController::class, 'delete'])->name('delete');
            });

            Route::prefix('tag')->name('tag.')->group(function() {
                Route::prefix('/')->name('index')->group(function() {
                    Route::get('/', [ProductTagController::class, 'index']);
                    Route::post('/', [ProductTagController::class, 'store']);
                });

                Route::prefix('edit/{id}')->name('edit')->group(function() {
                    Route::get('/', [ProductTagController::class, 'edit']);
                    Route::post('/', [ProductTagController::class, 'update']);
                });
                Route::get('delete/{id}', [ProductTagController::class, 'delete'])->name('delete');
            });
        });
    });
    Route::prefix('order')->name('order.')->group(function() {
        Route::get('/', [OrderController::class, 'index'])->name('index');
        Route::get('order/{id}', [OrderController::class, 'order'])->name('order');
        Route::get('all', [OrderController::class, 'all'])->name('all');
        Route::get('user/{id}', [OrderController::class, 'user'])->name('user');
        Route::get('delete/{id}', [OrderController::class, 'delete'])->name('delete');
    });
});

Route::prefix('laravel-filemanager')->middleware(['web', 'auth'])->group(static function() {
    Lfm::routes();
});

Auth::routes();
