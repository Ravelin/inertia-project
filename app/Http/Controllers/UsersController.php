<?php

namespace App\Http\Controllers;

use App\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        $users = User::all();
        return Inertia::render('Users/Index', [
            'users' => $users,
        ]);
    }

    public function create() {
        return Inertia::render('Users/Create');
    }

    public function edit($userId) {
        $user = User::find($userId);
        return Inertia::render('Users/Edit', [
           'user' => $user
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->password,
            'password' => bcrypt($request->password)
        ]);

        return redirect()
            ->route('users.index')
            ->with('successMessage', 'User was created successfully');
    }
}
