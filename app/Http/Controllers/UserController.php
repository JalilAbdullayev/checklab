<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
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

    public function store(ProfileUpdateRequest $request) {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        if($request->password === $request->password_confirmation) {
            $user->save();
            return redirect()->route('admin.users.index');
        }

        return redirect()->back()->with('error', 'Şifrələr uyğun deyil.');
    }

    public function edit($id) {
        $user = User::whereId($id)->first();
        return view('admin.users.edit', compact('user'));
    }

    public function update($id, ProfileUpdateRequest $request) {
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
