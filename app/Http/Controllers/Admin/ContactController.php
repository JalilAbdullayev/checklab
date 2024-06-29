<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller {
    public function index() {
        return view('admin.contact');
    }

    public function update(ContactRequest $request) {
        Contact::firstOrFail()->update([
            'work_hours' => $request->work_hours,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'whatsapp' => $request->whatsapp
        ]);
        return redirect()->back();
    }
}
