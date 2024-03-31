<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AutheticationController extends Controller
{

    public function register()
    {
        return view('Frontend.register');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:255|',
            'confirmed_password' => 'required|min:6|max:255|same:password',
        ]);

        $registerUser = new User();
        $registerUser->name = $request->name;
        $registerUser->email = $request->email;
        $registerUser->password = Hash::make($request->password);
        $registerUser->save();

        if ($registerUser) {
            return redirect(route('user.login'))->with('successfully', 'submitted');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }

    public function login()
    {
        return view('Frontend.login');
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $key = strtolower($request->email);
        $lockoutseconds = 30;
        if (RateLimiter::tooManyAttempts($key, 3)) {
            return back()->withErrors(['email' => 'To many attempts try again in ' . $lockoutseconds . ' seconds']);
        }
        // auth credential accept boolean value its check if the user provided data exist in database
        if (Auth::attempt($credentials)) {
            return redirect(route('admin.url.index'));
        }
        RateLimiter::hit($key, $lockoutseconds);

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logoutUser()
    {
        Auth::logout();
        return redirect()->route('url.create');
    }

}
