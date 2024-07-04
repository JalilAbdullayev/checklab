<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {
    public function index() {
        $data = User::all();
        return view('admin.users.index', compact('data'));
    }

    public function create() {
        return view('admin.users.create');
    }

    public function edit($id) {
        $user = User::whereId($id)->first();
        return view('admin.users.edit', compact('user'));
    }

    public function update($id, Request $request) {
        User::whereId($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role
        ]);
        return redirect()->route('admin.users.index');
    }

    public function delete($id) {
        User::whereId($id)->delete();
        return redirect()->back();
    }
}
