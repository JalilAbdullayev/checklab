<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller {
    public function index() {
        $data = Blog::all();
        return view('admin.blog.index', compact('data'));
    }

    public function create() {
        $categories = BlogCategory::all();
        $tags = BlogTag::all();
        return view('admin.blog.create', compact('categories', 'tags'));
    }

    public function store(BlogRequest $request) {
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->description = $request->description;
        $blog->text = $request->text;
        $blog->category_id = $request->category_id;
        if($request->file('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileOriginalName = $file->getClientOriginalName();
            $explode = explode('.', $fileOriginalName);
            $fileOriginalName = Str::slug($explode[0], '-') . '_' . now()->format('d-m-Y-H-i-s') . '.' . $extension;
            Storage::putFileAs('public/blog/', $file, $fileOriginalName);
            $blog->image = 'blog/' . $fileOriginalName;
        }
        $blog->save();
        $blog->tags()->sync($request->tags);
        return redirect()->route('admin.blog.index');
    }

    public function edit($id) {
        $blog = Blog::findOrFail($id);
        $categories = BlogCategory::all();
        $tags = BlogTag::all();
        return view('admin.blog.edit', compact('blog', 'categories', 'tags'));
    }

    public function update($id, BlogRequest $request) {
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->description = $request->description;
        $blog->text = $request->text;
        $blog->category_id = $request->category_id;
        if($request->file('image')) {
            if($blog->image && Storage::exists('public/' . $blog->image)) {
                Storage::delete('public/' . $blog->image);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileOriginalName = $file->getClientOriginalName();
            $explode = explode('.', $fileOriginalName);
            $fileOriginalName = Str::slug($explode[0], '-') . '_' . now()->format('d-m-Y-H-i-s') . '.' . $extension;
            Storage::putFileAs('public/blog/', $file, $fileOriginalName);
            $blog->image = 'blog/' . $fileOriginalName;
        }
        $blog->save();
        $blog->tags()->sync($request->tags);
        return redirect()->route('admin.blog.index');
    }

    public function delete($id) {
        $blog = Blog::findOrFail($id);
        if($blog->image && Storage::exists('public/' . $blog->image)) {
            Storage::delete('public/' . $blog->image);
        }
        $blog->delete();
        return Redirect::route('admin.blog.index');
    }
}
