<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Order;
use App\Models\OrderProduct;
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
                $total += $cartProduct->quantity * $product->discount;
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

        if($cartProduct) {
            $cartProduct->update([
                'quantity' => $cartProduct->quantity + 1
            ]);
        } else {
            $cart->products()->attach($product->id, [
                'quantity' => $request->quantity
            ]);
        }
        return Redirect::back();
    }

    public function update($id, Request $request) {
        $cart = Cart::whereUserId(Auth::user()->id)->first();
        $cartProduct = CartProduct::whereCartId($cart->id)->whereProductId($id)->first();
        $cartProduct->update([
            'quantity' => $request->quantity
        ]);
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

    public function submit() {
        $cart = Cart::whereUserId(Auth::user()->id)->first();
        $order = new Order;
        $order->user_id = Auth::user()->id;
        $total = 0;
        $order->total = $total;
        $order->save();
        foreach($cart->cart_products as $cartProduct) {
            $product = Product::findOrFail($cartProduct->product_id);
            $orderProduct = new OrderProduct;
            $orderProduct->order_id = $order->id;
            $orderProduct->product_id = $product->id;
            $orderProduct->quantity = $cartProduct->quantity;
            $orderProduct->price = $product->discount ?: $product->price;
            $orderProduct->save();
            if($product->discount) {
                $total = $cartProduct->quantity * $product->discount;
            } else {
                $total = $cartProduct->quantity * $product->price;
            }
        }
        $order->total = $total;
        $order->save();
        $cart->products()->detach();
        return Redirect::route('admin.order.index');
    }
}
