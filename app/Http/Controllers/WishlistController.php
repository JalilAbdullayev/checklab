<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class WishlistController extends Controller {
    public function index(): View {
        $products = Wishlist::whereUserId(auth()->user()->id)->firstOrCreate([
            'user_id' => auth()->user()->id
        ])->products;
        return view('front.wishlist', compact('products'));
    }

    public function store(int $id): JsonResponse {
        $product = Product::findOrFail($id);
        $wishlist = Wishlist::firstOrCreate([
            'user_id' => auth()->user()->id
        ]);
        $wishlistProduct = $wishlist->wishlist_products()->where('product_id', $product->id)->first();
        if(!$wishlistProduct) {
            $wishlist->products()->attach($product->id);
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }

    public function delete(int $id): JsonResponse {
        $wishlist = Wishlist::whereUserId(auth()->user()->id)->first();
        $wishlist->products()->detach($id);
        return response()->json();
    }
}
