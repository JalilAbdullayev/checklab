<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AgeGroup;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductTag;
use Illuminate\Support\Facades\View;
use Illuminate\View\View as Viewable;

class FrontController extends Controller {
    public function index(): Viewable {
        $categories = ProductCategory::has('products')->inRandomOrder()->get();
        $allProducts = Product::where('discount', '>', 0)->take(5)->get();
        $ages = AgeGroup::has('products')->get();
        return View::make('front.index', compact('categories', 'allProducts', 'ages'));
    }

    public function about(): Viewable {
        $about = About::firstOrFail();
        return View::make('front.about', compact('about'));
    }

    public function blog(): Viewable {
        $blogs = Blog::paginate(9);
        return View::make('front.blog', compact('blogs'));
    }

    public function blogCategories(string $slug): Viewable {
        $category = BlogCategory::whereSlug($slug)->firstOrFail();
        $blogs = Blog::where('category_id', $category->id)->get();
        return View::make('front.blog', compact('blogs'));
    }

    public function blogTags(string $slug): Viewable {
        $tag = BlogTag::whereSlug($slug)->firstOrFail();
        $blogs = $tag->blogs()->get();
        return View::make('front.blog', compact('blogs'));
    }

    public function blogDetail(string $slug): Viewable {
        $blog = Blog::whereSlug($slug)->firstOrFail();
        $otherPosts = Blog::where('id', '!=', $blog->id)->get();
        return View::make('front.blog-detail', compact('blog', 'otherPosts'));
    }

    public function productDetail(string $slug): Viewable {
        $product = Product::whereSlug($slug)->firstOrFail();
        $otherProducts = Product::where('id', '!=', $product->id)->take(6)->get();
        $id = $product->id;
        return View::make('front.product-detail', compact('product', 'otherProducts', 'id'));
    }

    public function productCategories(string $slug): Viewable {
        $category = ProductCategory::whereSlug($slug)->firstOrFail();
        $blogs = $category->products()->paginate(9);
        return View::make('front.blog', compact('blogs', 'category'));
    }

    public function productTags(string $slug): Viewable {
        $tag = ProductTag::whereSlug($slug)->firstOrFail();
        $blogs = $tag->products()->paginate(9);
        return View::make('front.blog', compact('blogs', 'tag'));
    }

    public function ages($slug) {
        $age = AgeGroup::whereSlug($slug)->firstOrFail();
        $blogs = $age->products()->paginate(9);
        return View::make('front.blog', compact('blogs', 'age'));
    }

    public function contact(): Viewable {
        return View::make('front.contact');
    }

    public function search() {
        $search = request('search');
        $category = ProductCategory::whereId(request('category'))->firstOrFail();
        $blogs = $category->products()->where('title', 'like', '%' . request('search') . '%')->paginate(9);
        return View::make('front.blog', compact('blogs', 'search'));
    }
}
