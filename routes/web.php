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
use App\Http\Controllers\Products\AgeGroupController;
use App\Http\Controllers\Products\ProductCategoryController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Products\ProductTagController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Moderator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;

Route::controller(FrontController::class)->group(function() {
    Route::get('/', 'index')->name('home');
    Route::get('about', 'about')->name('about');

    Route::prefix('blog')->name('blog.')->group(function() {
        Route::get('/', 'blog')->name('index');
        Route::get('{slug}', 'blogDetail')->name('detail');
        Route::get('category/{slug}', 'blogCategories')->name('category');
        Route::get('tag/{slug}', 'blogTags')->name('tag');
    });

    Route::prefix('product')->name('product.')->group(function() {
        Route::get('product/{slug}', 'productDetail')->name('index');
        Route::get('category/{slug}', 'productCategories')->name('category');
        Route::get('tag/{slug}', 'productTags')->name('tag');
        Route::get('age/{slug}', 'ages')->name('age');
        Route::get('modal', 'productModal')->name('modal');
        Route::post('rate/{id}', 'rate')->name('rate');
    });
    Route::get('search', 'search')->name('search');
});

Route::middleware('auth')->group(function() {
    Route::prefix('cart')->name('cart.')->controller(CartController::class)->group(function() {
        Route::get('/', 'index')->name('index');
        Route::post('store/{id}', 'store')->name('store');
        Route::get('delete/{id}', 'delete')->name('delete');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('empty', 'empty')->name('empty');
        Route::post('submit', 'submit')->name('submit');
    });

    Route::prefix('wishlist')->name('wishlist.')->controller(WishlistController::class)->group(function() {
        Route::get('/', 'index')->name('index');
        Route::post('store/{id}', 'store')->name('store');
        Route::delete('delete/{id}', 'delete')->name('delete');
    });
});

Route::prefix('contact')->name('contact')->group(function() {
    Route::get('/', [FrontController::class, 'contact']);
    Route::post('/', [MessageController::class, 'store']);
});

Route::post('subscribe', [SubscriberController::class, 'store'])->name('subscribe');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::prefix('settings')->name('settings')->middleware(Admin::class)->controller(SettingsController::class)->group(function() {
        Route::get('/', 'index');
        Route::post('/', 'update');
    });

    Route::middleware(Moderator::class)->group(function() {
        Route::prefix('contact')->name('contact')->controller(ContactController::class)->group(function() {
            Route::get('/', 'index');
            Route::post('/', 'update');
        });

        Route::prefix('messages')->name('messages.')->controller(MessageController::class)->group(function() {
            Route::get('/', 'index')->name('index');
            Route::get('message/{id}', 'show')->name('show');
            Route::get('delete/{id}', 'delete')->name('delete');
        });

        Route::prefix('subscribers')->name('subscribers.')->controller(SubscriberController::class)->group(function() {
            Route::get('/', 'index')->name('index');
            Route::get('delete/{id}', 'delete')->name('delete');
        });

        Route::prefix('about')->name('about')->controller(AboutController::class)->group(function() {
            Route::get('/', 'index');
            Route::post('/', 'update');
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

            Route::prefix('category')->name('category.')->controller(BlogCategoryController::class)->group(function() {
                Route::prefix('/')->name('index')->group(function() {
                    Route::get('/', 'index');
                    Route::post('/', 'store');
                });

                Route::prefix('edit/{id}')->name('edit')->group(function() {
                    Route::get('/', 'edit');
                    Route::post('/', 'update');
                });

                Route::get('all/{slug}', 'all')->name('all');
                Route::get('delete/{id}', 'delete')->name('delete');
            });

            Route::prefix('tag')->name('tag.')->controller(BlogTagController::class)->group(function() {
                Route::prefix('/')->name('index')->group(function() {
                    Route::get('/', 'index');
                    Route::post('/', 'store');
                });

                Route::prefix('edit/{id}')->name('edit')->group(function() {
                    Route::get('/', 'edit');
                    Route::post('/', 'update');
                });

                Route::get('all/{slug}', 'all')->name('all');
                Route::get('delete/{id}', 'delete')->name('delete');
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

            Route::prefix('category')->name('category.')->controller(ProductCategoryController::class)->group(function() {
                Route::prefix('/')->name('index')->group(function() {
                    Route::get('/', 'index');
                    Route::post('/', 'store');
                });

                Route::prefix('edit/{id}')->name('edit')->group(function() {
                    Route::get('/', 'edit');
                    Route::post('/', 'update');
                });

                Route::get('all/{slug}', 'all')->name('all');
                Route::get('delete/{id}', 'delete')->name('delete');
            });

            Route::prefix('tag')->name('tag.')->controller(ProductTagController::class)->group(function() {
                Route::prefix('/')->name('index')->group(function() {
                    Route::get('/', 'index');
                    Route::post('/', 'store');
                });

                Route::prefix('edit/{id}')->name('edit')->group(function() {
                    Route::get('/', 'edit');
                    Route::post('/', 'update');
                });

                Route::get('all/{slug}', 'all')->name('all');
                Route::get('delete/{id}', 'delete')->name('delete');
            });

            Route::prefix('age-groups')->name('age-groups.')->controller(AgeGroupController::class)->group(function() {
                Route::prefix('/')->name('index')->group(function() {
                    Route::get('/', 'index');
                    Route::post('/', 'store');
                });

                Route::prefix('edit/{id}')->name('edit')->group(function() {
                    Route::get('/', 'edit');
                    Route::post('/', 'update');
                });

                Route::get('all/{slug}', 'all')->name('all');
                Route::get('delete/{id}', 'delete')->name('delete');
            });
        });
    });
    Route::prefix('order')->name('order.')->controller(OrderController::class)->group(function() {
        Route::middleware(Moderator::class)->group(function() {
            Route::get('all', 'all')->name('all');
            Route::get('user/{id}', 'user')->name('user');
            Route::get('delete/{id}', 'delete')->name('delete');
        });
        Route::get('/', 'index')->name('index');
        Route::get('{id}', 'order')->name('order');
    });

    Route::prefix('profile')->name('profile.')->controller(ProfileController::class)->group(function() {
        Route::get('/', 'index')->name('index');
        Route::post('update', 'update')->name('update');
        Route::get('delete', 'delete')->name('delete');
    });

    Route::prefix('users')->middleware(Admin::class)->name('users.')->controller(UserController::class)->group(function() {
        Route::get('/', 'index')->name('index');
        Route::prefix('create')->name('create')->group(function() {
            Route::get('/', 'create');
            Route::post('/', 'store');
        });
        Route::prefix('edit/{id}')->name('edit')->group(function() {
            Route::get('/', 'edit');
            Route::post('/', 'update');
        });
        Route::get('delete/{id}', 'delete')->name('delete');
    });
});

Route::prefix('laravel-filemanager')->middleware(['web', 'auth'])->group(static function() {
    Lfm::routes();
});

Auth::routes();
