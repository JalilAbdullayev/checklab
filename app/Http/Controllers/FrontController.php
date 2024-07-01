<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;

class FrontController extends Controller {
    public function index() {
        return view('front.index');
    }

    public function about() {
        $about = About::firstOrFail();
        return view('front.about', compact('about'));
    }

    public function blog() {
        $blogs = Blog::all();
        return view('front.blog', compact('blogs'));
    }

    public function categories($slug) {
        $category = BlogCategory::whereSlug($slug)->firstOrFail();
        $blogs = Blog::where('category_id', $category->id)->get();
        return view('front.blog', compact('blogs'));
    }

    public function tags($slug) {
        $tag = BlogTag::whereSlug($slug)->firstOrFail();
        $blogs = $tag->blogs()->get();
        return view('front.blog', compact('blogs'));
    }

    public function blogDetail($slug) {
        $blog = Blog::whereSlug($slug)->firstOrFail();
        $otherPosts = Blog::where('id', '!=', $blog->id)->get();
        return view('front.blog-detail', compact('blog', 'otherPosts'));
    }

    public function contact() {
        return view('front.contact');
    }
}
