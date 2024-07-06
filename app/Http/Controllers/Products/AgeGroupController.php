<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\AgeGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AgeGroupController extends Controller {
    public function index() {
        $data = AgeGroup::all();
        return view('admin.products.age-groups.index', compact('data'));
    }

    public function store(Request $request) {
        $request->validate(['title' => 'required|unique:blog_tags|max:255'], [
            'title.required' => 'Kateqoriya adı daxil edin.',
            'title.unique' => 'Bu kateqoriya artıq mövcuddur.',
            'title.max' => 'Kateqoriya adı 255 simvoldan az olmalıdır.'
        ]);
        AgeGroup::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title)
        ]);
        return redirect()->back();
    }

    public function edit($id) {
        $tag = AgeGroup::findOrFail($id);
        return view('admin.products.age-groups.edit', compact('tag'));
    }

    public function update($id, Request $request) {
        $request->validate(['title' => 'required|max:255'], [
            'title.required' => 'Kateqoriya adı daxil edin.',
            'title.unique' => 'Bu kateqoriya artıq mövcuddur.',
            'title.max' => 'Kateqoriya adı 255 simvoldan az olmalıdır.'
        ]);
        AgeGroup::findOrFail($id)->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title)
        ]);
        return redirect()->route('admin.products.age-groups.index');
    }

    public function all($slug) {
        $age = AgeGroup::whereSlug($slug)->firstOrFail();
        $data = $age->products;
        return view('admin.products.index', compact('data'), ['title' => $age->title]);
    }

    public function delete($id) {
        AgeGroup::findOrFail($id)->delete();
        return response()->json(200);
    }
}
