<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Settings;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     */
    public function register(): void {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {
        $settings = Settings::firstOrFail();
        $contact = Contact::firstOrFail();
        $headSliders = Product::take(6)->get();
        $productCategories = ProductCategory::all();
        Paginator::useBootstrapFive();

        View::share('settings', $settings);
        View::share('contact', $contact);
        View::share('headSliders', $headSliders);
        View::share('productCategories', $productCategories);
    }
}
