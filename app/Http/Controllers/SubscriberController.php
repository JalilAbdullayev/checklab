<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller {
    public function index() {
        $data = Subscriber::all();
        return view('admin.subscribers', compact('data'));
    }

    public function store(Request $request) {
        $request->validate(['subscriber' => 'required|email|unique:subscribers'], [
            'subscriber.required' => 'Email daxil edin',
            'subscriber.email' => 'Düzgün e-mail daxil edin.',
            'subscriber.unique' => 'Siz onsuz da bizim abunəçimizsiniz.'
        ]);
        Subscriber::create([
            'email' => $request->subscriber
        ]);
        return redirect()->back();
    }

    public function delete($id) {
        Subscriber::findOrFail($id)->delete();
        return response()->json(200);
    }
}
