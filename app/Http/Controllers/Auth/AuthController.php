<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Services\UserService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string',
        //     'email' => 'required|string|unique:users,email|email',
        //     'password' => 'required|string',
        //     'phone' => 'required|numeric',
        //     'gender' => 'required|in:male,female'

        // ]);
        $image = $request->file('image');
        if ($image) {
            // $image_path = $request->file('image')->store('users', 'public'); //store('name of folder', 'in folder public');

            $image_path = $image->store('users', 'public');
            $image = asset('storage/' . $image_path);
        } else {
            $image_path = null;
        }
        $user = User::create([
            'image' => $image,
            // 'image' => $image_path,
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'gender' => $request['gender'],
            'phone' => $request['phone'],
        ]);
        return redirect()->route('login');
    }

    public function login()
    {
        return view('login');
    }

    public function check(Request $request)
    {
        $request->validate([
            'email' => 'required|string|exists:users,email|email',
            'password' => 'required|string'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login');
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
