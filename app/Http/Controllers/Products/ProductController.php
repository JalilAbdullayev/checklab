<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\AgeGroup;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductTag;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Illuminate\View\View as Viewable;

class ProductController extends Controller {
    public function index(): Viewable {
        $data = Product::all();
        return View::make('admin.products.index', compact('data'));
    }

    public function create(): Viewable {
        $categories = ProductCategory::all();
        $tags = ProductTag::all();
        $ages = AgeGroup::all();
        return View::make('admin.products.create', compact('categories', 'tags', 'ages'));
    }

    public function store(ProductRequest $request) {
        $product = new Product;
        $product->title = $request->title;
        $product->slug = Str::slug($request->title);
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->description = $request->description;
        $product->text = $request->text;
        if($request->file('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileOriginalName = $file->getClientOriginalName();
            $explode = explode('.', $fileOriginalName);
            $fileOriginalName = Str::slug($explode[0], '-') . '_' . now()->format('d-m-Y-H-i-s') . '.' . $extension;
            Storage::putFileAs('public/products/', $file, $fileOriginalName);
            $product->image = 'products/' . $fileOriginalName;
        }
        $product->save();
        $product->tags()->sync($request->tags);
        $product->categories()->sync($request->categories);
        $product->ages()->sync($request->ages);
        return Redirect::route('admin.products.index');
    }

    public function edit($id) {
        $product = Product::findOrFail($id);
        $categories = ProductCategory::all();
        $tags = ProductTag::all();
        $ages = AgeGroup::all();
        return View::make('admin.products.edit', compact('product', 'categories', 'tags', 'ages'));
    }

    public function update(ProductRequest $request, $id) {
        $product = Product::find($id);
        $product->title = $request->title;
        $product->slug = Str::slug($request->title);
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->description = $request->description;
        $product->text = $request->text;
        if($request->file('image')) {
            if($product->image && Storage::exists('public/' . $product->image)) {
                Storage::delete('public/' . $product->image);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileOriginalName = $file->getClientOriginalName();
            $explode = explode('.', $fileOriginalName);
            $fileOriginalName = Str::slug($explode[0], '-') . '_' . now()->format('d-m-Y-H-i-s') . '.' . $extension;
            Storage::putFileAs('public/products/', $file, $fileOriginalName);
            $product->image = 'products/' . $fileOriginalName;
        }
        $product->save();
        $product->tags()->sync($request->tags);
        $product->categories()->sync($request->categories);
        $product->ages()->sync($request->ages);
        return Redirect::route('admin.products.index');
    }

    public function delete($id) {
        $product = Product::findOrFail($id);
        if($product->image && Storage::exists('public/' . $product->image)) {
            Storage::delete('public/' . $product->image);
        }
        $product->tags()->detach();
        $product->categories()->detach();
        $product->ages()->detach();
        $product->delete();
        return Redirect::route('admin.products.index');
    }
}
