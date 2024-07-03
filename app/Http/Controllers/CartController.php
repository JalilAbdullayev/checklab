<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class CartController extends Controller {
    public function index() {
        $data = Cart::whereUserId(Auth::user()->id)->get();
        $total = 0;
        foreach($data as $item) {
            foreach($item->products as $product) {
                $cartProduct = $item->cart_products->where('product_id', $product->id)->first();
                $total += $cartProduct->quantity * ($product->price - (($product->price * $product->discount) / 100));
            }
        }
        return View::make('front.cart', compact('data', 'total'));
    }

    public function store($id, Request $request) {
        $request->validate(['quantity' => 'required|integer|min:1'], [
            'quantity.min' => 'Say 1 ədəddən az ola bilməz.',
            'quantity.required' => 'Say daxil edin.',
            'quantity.integer' => 'Say tam ədəd olmalıdır.'
        ]);
        $product = Product::findOrFail($id);
        $cart = Cart::firstOrCreate([
            'user_id' => Auth::user()->id
        ]);
        $cartProduct = $cart->cart_products()->where('product_id', $product->id)->first();
        if($product->quantity == 0) {
            return Redirect::back()->with('error', 'Bu sayda məhsul mövcud deyil.');
        }

        if($cartProduct) {
            if($product->quantity < $request->quantity + $cartProduct->quantity) {
                return Redirect::back()->with('error', 'Bu sayda məhsul mövcud deyil.');
            }

            $cartProduct->update([
                'quantity' => $cartProduct->quantity + 1
            ]);
        } else {
            if($product->quantity < $request->quantity) {
                return Redirect::back()->with('error', 'Bu sayda məhsul mövcud deyil.');
            }

            $cart->products()->attach($product->id, [
                'quantity' => $request->quantity
            ]);
        }
        return Redirect::back();
    }

    public function update($id, Request $request) {
        $product = Product::findOrFail($id);
        $cart = Cart::whereUserId(Auth::user()->id)->first();
        $cartProduct = CartProduct::whereCartId($cart->id)->whereProductId($id)->first();
        if($request->quantity <= $product->quantity) {
            $cartProduct->update([
                'quantity' => $request->quantity
            ]);
        } else {
            return Redirect::back()->with('error', 'Bu sayda məhsul mövcud deyil.');
        }
        return Redirect::back();
    }

    public function delete($id) {
        $cart = Cart::whereUserId(Auth::user()->id)->first();
        $cart->products()->detach($id);
        return Redirect::back();
    }

    public function empty() {
        $cart = Cart::whereUserId(Auth::user()->id)->first();
        $cart->products()->detach();
        return Redirect::back();
    }
}
