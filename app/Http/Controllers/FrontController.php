<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\View;
use Illuminate\View\View as Viewable;

class FrontController extends Controller {
    public function index(): Viewable {
        $categories = ProductCategory::all();
        $products = Product::take(4)->get();
        $allProducts = Product::where('discount', '>', 0)->take(5)->get();
        return View::make('front.index', compact('categories', 'products', 'allProducts'));
    }

    public function about(): Viewable {
        $about = About::firstOrFail();
        return View::make('front.about', compact('about'));
    }

    public function blog(): Viewable {
        $blogs = Blog::all();
        return View::make('front.blog', compact('blogs'));
    }

    public function categories($slug): Viewable {
        $category = BlogCategory::whereSlug($slug)->firstOrFail();
        $blogs = Blog::where('category_id', $category->id)->get();
        return View::make('front.blog', compact('blogs'));
    }

    public function tags($slug): Viewable {
        $tag = BlogTag::whereSlug($slug)->firstOrFail();
        $blogs = $tag->blogs()->get();
        return View::make('front.blog', compact('blogs'));
    }

    public function blogDetail($slug): Viewable {
        $blog = Blog::whereSlug($slug)->firstOrFail();
        $otherPosts = Blog::where('id', '!=', $blog->id)->get();
        return View::make('front.blog-detail', compact('blog', 'otherPosts'));
    }

    public function productDetail($slug): Viewable {
        $product = Product::whereSlug($slug)->firstOrFail();
        $priceWithDiscount = $product->price - ($product->price * $product->discount) / 100;
        $otherProducts = Product::where('id', '!=', $product->id)->take(6)->get();
        $id = $product->id;
        return View::make('front.product-detail', compact('product', 'priceWithDiscount', 'otherProducts', 'id'));
    }

    public function contact(): Viewable {
        return View::make('front.contact');
    }
}
