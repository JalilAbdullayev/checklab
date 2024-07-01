<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller {
    public function index() {
        $data = BlogCategory::all();
        return view('admin.blog.categories.index', compact('data'));
    }

    public function store(Request $request) {
        $request->validate(['title' => 'required|unique:blog_categories|max:255'], [
            'title.required' => 'Kateqoriya adı daxil edin.',
            'title.unique' => 'Bu kateqoriya artıq mövcuddur.',
            'title.max' => 'Kateqoriya adı 255 simvoldan az olmalıdır.'
        ]);
        BlogCategory::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title)
        ]);
        return redirect()->back();
    }

    public function edit($id) {
        $category = BlogCategory::findOrFail($id);
        return view('admin.blog.categories.edit', compact('category'));
    }

    public function update($id, Request $request) {
        $request->validate(['title' => 'required|max:255'], [
            'title.required' => 'Kateqoriya adı daxil edin.',
            'title.unique' => 'Bu kateqoriya artıq mövcuddur.',
            'title.max' => 'Kateqoriya adı 255 simvoldan az olmalıdır.'
        ]);
        BlogCategory::findOrFail($id)->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title)
        ]);
        return redirect()->route('admin.blog.category.index');

    }

    public function delete($id) {
        BlogCategory::findOrFail($id)->delete();
        return response()->json(200);
    }
}
