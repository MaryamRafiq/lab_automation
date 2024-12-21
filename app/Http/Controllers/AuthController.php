<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('login');
    }

    // Handle login logic
    public function login(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/dashboard');  // Redirect to the dashboard after login
        }

        // If login fails
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    // Show the signup form
    public function showSignUpForm()
    {
        return view('signup');
    }

    // Handle signup logic
    public function signup(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        // Create the new user
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Log the user in
        Auth::login($user);

        return redirect('/dashboard');
    }

    // Handle logout logic
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
