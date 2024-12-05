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
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontController extends Controller {
    public function index(): View {
        $categories = ProductCategory::has('products')->inRandomOrder()->get();
        $allProducts = Product::where('discount', '>', 0)->take(5)->get();
        $ages = AgeGroup::has('products')->get();
        return view('front.index', compact('categories', 'allProducts', 'ages'));
    }

    public function about(): View {
        $about = About::firstOrFail();
        return view('front.about', compact('about'));
    }

    public function blog(): View {
        $blogs = Blog::paginate(9);
        return view('front.blog', compact('blogs'));
    }

    public function blogCategories(string $slug): View {
        $category = BlogCategory::whereSlug($slug)->firstOrFail();
        $blogs = Blog::where('category_id', $category->id)->get();
        return view('front.blog', compact('blogs'));
    }

    public function blogTags(string $slug): View {
        $tag = BlogTag::whereSlug($slug)->firstOrFail();
        $blogs = $tag->blogs()->get();
        return view('front.blog', compact('blogs'));
    }

    public function blogDetail(string $slug): View {
        $blog = Blog::whereSlug($slug)->firstOrFail();
        $otherPosts = Blog::where('id', '!=', $blog->id)->get();
        return view('front.blog-detail', compact('blog', 'otherPosts'));
    }

    public function productDetail(string $slug): View {
        $product = Product::whereSlug($slug)->firstOrFail();
        $otherProducts = Product::where('id', '!=', $product->id)->take(6)->get();
        $id = $product->id;
        return view('front.product-detail', compact('product', 'otherProducts', 'id'));
    }

    public function productCategories(string $slug): View {
        $category = ProductCategory::whereSlug($slug)->firstOrFail();
        $blogs = $category->products()->paginate(9);
        return view('front.blog', compact('blogs', 'category'));
    }

    public function productTags(string $slug): View {
        $tag = ProductTag::whereSlug($slug)->firstOrFail();
        $blogs = $tag->products()->paginate(9);
        return view('front.blog', compact('blogs', 'tag'));
    }

    public function ages($slug) {
        $age = AgeGroup::whereSlug($slug)->firstOrFail();
        $blogs = $age->products()->paginate(9);
        return view('front.blog', compact('blogs', 'age'));
    }

    public function contact(): View {
        return view('front.contact');
    }

    public function search(): View {
        $search = request('search');
        $category = ProductCategory::whereId(request('category'))->firstOrFail();
        $blogs = $category->products()->where('title', 'like', '%' . request('search') . '%')->paginate(9);
        return view('front.blog', compact('blogs', 'search'));
    }

    public function productModal(Request $request): JsonResponse {
        $id = $request->input('id');
        $product = Product::findOrFail($id);
        return response()->json([
            'product' => $product,
            'categories' => $product->categories,
            'tags' => $product->tags,
            'ages' => $product->ages
        ]);
    }

    public function rate($id, Request $request): JsonResponse {
        $product = Product::findOrFail($id);
        $product->rateOnce($request->rate);
        return response()->json(['average' => number_format($product->averageRating, 1)]);
    }
}
