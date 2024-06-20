<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            // 'first_name' => ['required', 'string', 'max:50'],
            // 'last_name' => ['nullable', 'string', 'max:50'],
            // 'username' => ['required', 'string', 'max:32', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:320', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
            // 'phone_number' => ['nullable', 'string', 'max:16', 'unique:users'],
            // 'date_of_birth' => ['nullable', 'date'],
        ]);

        // use regex to only extract a-z and numbers and replace spaces with _
        $username = preg_replace('/[^a-z0-9]/', '', strtolower($validated['email']));

        $user = User::create([
            'first_name' => '',
            'last_name' => '',
            'username' => $username,
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            // 'phone_number' => $request->phone_number,
            // 'date_of_birth' => $request->date_of_birth,
        ]);

        Auth::login($user);

        return redirect()->route('homepage');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = [
            'username' => $validated['username'],
            'password' => $validated['password'],
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('homepage');
        }

        return back()->withErrors([
            'username' => 'Invalid credentials.',
        ]);
    }

    public function homepage()
    {
        $user = Auth::user();
        return view('homepage', ['user' => $user]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

