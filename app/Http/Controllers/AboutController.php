<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AboutController extends Controller {
    public function index() {
        $about = About::firstOrFail();
        return view('admin.about', compact('about'));
    }

    public function update(AboutRequest $request) {
        $about = About::firstOrFail();
        if($request->file('image')) {
            if($request->image) {
                Storage::delete('public/' . $about->image);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileOriginalName = $file->getClientOriginalName();
            $explode = explode('.', $fileOriginalName);
            $fileOriginalName = Str::slug($explode[0], '-') . '_' . now()->format('d-m-Y-H-i-s') . '.' . $extension;
            Storage::putFileAs('public/images/', $file, $fileOriginalName);
            $about->image = 'images/' . $fileOriginalName;
        }
        $about->title = $request->title;
        $about->about = $request->about;
        $about->save();
        return redirect()->back();
    }
}
