<?php

namespace App\Http\Controllers;

use App\Models\About;

class FrontController extends Controller {
    public function index() {
        return view('front.index');
    }

    public function about() {
        $about = About::firstOrFail();
        return view('front.about', compact('about'));
    }

    public function blog() {
        return view('front.blog');
    }

    public function contact() {
        return view('front.contact');
    }
}
