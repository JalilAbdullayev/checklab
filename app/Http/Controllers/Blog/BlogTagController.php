<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\BlogTag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogTagController extends Controller {
    public function index() {
        $data = BlogTag::all();
        return view('admin.blog.tags.index', compact('data'));
    }

    public function store(Request $request) {
        $request->validate(['title' => 'required|unique:blog_tags|max:255'], [
            'title.required' => 'Kateqoriya adı daxil edin.',
            'title.unique' => 'Bu kateqoriya artıq mövcuddur.',
            'title.max' => 'Kateqoriya adı 255 simvoldan az olmalıdır.'
        ]);
        BlogTag::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title)
        ]);
        return redirect()->back();
    }

    public function edit($id) {
        $tag = BlogTag::findOrFail($id);
        return view('admin.blog.tags.edit', compact('tag'));
    }

    public function update($id, Request $request) {
        $request->validate(['title' => 'required|max:255'], [
            'title.required' => 'Kateqoriya adı daxil edin.',
            'title.unique' => 'Bu kateqoriya artıq mövcuddur.',
            'title.max' => 'Kateqoriya adı 255 simvoldan az olmalıdır.'
        ]);
        BlogTag::findOrFail($id)->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title)
        ]);
        return redirect()->route('admin.blog.tag.index');
    }

    public function delete($id) {
        BlogTag::findOrFail($id)->delete();
        return response()->json(200);
    }
}
