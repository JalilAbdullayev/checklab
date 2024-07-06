<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller {
    public function index() {
        $data = Order::whereUserId(Auth::user()->id)->get();
        return view('admin.orders.orders', compact('data',));
    }

    public function order($id) {
        $data = Order::whereUserId(Auth::user()->id)->whereId($id)->get();

        if(Auth::user()->role < 2) {
            $data = Order::whereId($id)->get();
        }
        $total = 0;
        foreach($data as $item) {
            foreach($item->products as $product) {
                $orderProduct = $item->order_products->where('product_id', $product->id)->first();
                $total += $orderProduct->quantity * $orderProduct->price;
            }
        }
        return view('admin.orders.index', compact('data', 'total'));
    }

    public function all() {
        $data = Order::all();
        return view('admin.orders.all', compact('data'));
    }

    public function user($id) {
        $data = Order::whereUserId($id)->get();
        return view('admin.orders.orders', compact('data'));
    }

    public function delete($id) {
        $order = Order::whereId($id)->first();
        $order->products()->detach();
        $order->delete();
        return redirect()->back();
    }
}
