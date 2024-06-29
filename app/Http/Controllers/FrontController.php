<?php

namespace App\Http\Controllers;

class FrontController extends Controller {
    public function index() {
        return view('front.index');
    }

    public function about() {
        return view('front.about');
    }

    public function blog() {
        return view('front.blog');
    }

    public function contact() {
        return view('front.contact');
    }
}
