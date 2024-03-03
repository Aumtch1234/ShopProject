<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate the request data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Authentication successful, redirect to welcome page
            return redirect('/shop');

        }
        else {
            // Authentication failed, redirect back with error message
            return back()->withErrors(['error' => 'อีเมล หรือ รหัสผ่านของคุณไม่ถูกต้อง']);

        }


    }

    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Create new user record in database
        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'wallet' => 0.00
        ];

        // Authenticate the newly registered user
        DB::table('users')->insert($user);
        // Redirect to welcome page after registration
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
