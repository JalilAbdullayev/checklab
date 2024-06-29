<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;

class MessageController extends Controller {
    public function index() {
        $data = Message::all();
        return view('admin.messages.index', compact('data'));
    }

    public function store(MessageRequest $request) {
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);
        return redirect()->back()->with('success', 'Mesajınız qeydə alındı');
    }

    public function show($id) {
        $message = Message::findOrFail($id);
        return view('admin.messages.show', compact('message'));
    }

    public function delete($id) {
        Message::findOrFail($id)->delete();
        return response()->json(200);
    }
}
