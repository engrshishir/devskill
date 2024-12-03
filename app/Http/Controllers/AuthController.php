<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Dashboard(Request $request){
        return view('home');
    }

    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect('/home');  // Redirect to a dashboard or home page
        }
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->route('home')->with('success', 'Login successful');
        }
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function storeUser(Request $request)
    {
        if (Auth::check() && !Auth::user()->is_admin) {
            return redirect()->route('home')->with('error', 'You must be an admin to access this page.');
        } 
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'is_admin' => false,
        ]);

        return redirect()->route('home')->with('success', 'User created successfully!');
    }
}
