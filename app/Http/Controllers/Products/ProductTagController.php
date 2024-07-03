<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\ProductTag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductTagController extends Controller {
    public function index() {
        $data = ProductTag::all();
        return view('admin.blog.tags.index', compact('data'));
    }

    public function store(Request $request) {
        $request->validate(['title' => 'required|unique:blog_tags|max:255'], [
            'title.required' => 'Kateqoriya adı daxil edin.',
            'title.unique' => 'Bu kateqoriya artıq mövcuddur.',
            'title.max' => 'Kateqoriya adı 255 simvoldan az olmalıdır.'
        ]);
        ProductTag::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title)
        ]);
        return redirect()->back();
    }

    public function edit($id) {
        $tag = ProductTag::findOrFail($id);
        return view('admin.blog.tags.edit', compact('tag'));
    }

    public function update($id, Request $request) {
        $request->validate(['title' => 'required|max:255'], [
            'title.required' => 'Kateqoriya adı daxil edin.',
            'title.unique' => 'Bu kateqoriya artıq mövcuddur.',
            'title.max' => 'Kateqoriya adı 255 simvoldan az olmalıdır.'
        ]);
        ProductTag::findOrFail($id)->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title)
        ]);
        return redirect()->route('admin.blog.tag.index');
    }

    public function delete($id) {
        ProductTag::findOrFail($id)->delete();
        return response()->json(200);
    }
}
