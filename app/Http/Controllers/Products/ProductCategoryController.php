<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller {
    public function index() {
        $data = ProductCategory::all();
        return view('admin.products.categories.index', compact('data'));
    }

    public function store(Request $request) {
        $category = new ProductCategory;
        $request->validate(['title' => 'required|unique:product_categories|max:255',
            'icon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'], [
            'title.required' => 'Kateqoriya adı daxil edin.',
            'title.unique' => 'Bu kateqoriya artıq mövcuddur.',
            'title.max' => 'Kateqoriya adı 255 simvoldan az olmalıdır.',
            'icon.image' => 'Şəkil şəkil olmalıdır.',
            'icon.mimes' => 'Şəkil bu fayl tiplərindən biri olmalıdır: jpeg, png, jpg, gif, svg.',
            'icon.max' => 'Şəkil ölçüsü 2MB-dan çox ola bilməz.'
        ]);
        $category->title = $request->title;
        $category->slug = Str::slug($request->title);
        if($request->file('icon')) {
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $fileOriginalName = $file->getClientOriginalName();
            $explode = explode('.', $fileOriginalName);
            $fileOriginalName = Str::slug($explode[0], '-') . '_' . now()->format('d-m-Y-H-i-s') . '.' . $extension;
            Storage::putFileAs('public/products/categories/', $file, $fileOriginalName);
            $category->icon = 'products/categories/' . $fileOriginalName;
        }
        $category->save();
        return redirect()->back();
    }

    public function edit($id) {
        $category = ProductCategory::findOrFail($id);
        return view('admin.products.categories.edit', compact('category'));
    }

    public function update($id, Request $request) {
        $category = ProductCategory::findOrFail($id);
        $request->validate(['title' => 'required|max:255',
            'icon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'], [
            'title.required' => 'Kateqoriya adı daxil edin.',
            'title.unique' => 'Bu kateqoriya artıq mövcuddur.',
            'title.max' => 'Kateqoriya adı 255 simvoldan az olmalıdır.',
            'icon.image' => 'Şəkil şəkil olmalıdır.',
            'icon.mimes' => 'Şəkil bu fayl tiplərindən biri olmalıdır: jpeg, png, jpg, gif, svg.',
            'icon.max' => 'Şəkil ölçüsü 2MB-dan çox ola bilməz.'
        ]);
        $category->title = $request->title;
        $category->slug = Str::slug($request->title);
        if($request->file('icon')) {
            if($category->icon && Storage::exists('public/' . $category->icon)) {
                Storage::delete('public/' . $category->icon);
            }
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $fileOriginalName = $file->getClientOriginalName();
            $explode = explode('.', $fileOriginalName);
            $fileOriginalName = Str::slug($explode[0], '-') . '_' . now()->format('d-m-Y-H-i-s') . '.' . $extension;
            Storage::putFileAs('public/products/categories/', $file, $fileOriginalName);
            $category->icon = 'products/categories/' . $fileOriginalName;
        }
        $category->save();
        return redirect()->route('admin.products.category.index');
    }

    public function all($slug) {
        $category = ProductCategory::whereSlug($slug)->firstOrFail();
        $data = $category->products;
        return view('admin.products.index', compact('data'), ['title' => $category->title]);
    }

    public function delete($id) {
        $category = ProductCategory::findOrFail($id);
        if($category->icon && Storage::exists('public/' . $category->icon)) {
            Storage::delete('public/' . $category->icon);
        }
        $category->delete();
        return response()->json(200);
    }
}
