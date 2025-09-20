<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * return the register page
     */
    public function register()
    {
        return view('authenticate.register');
    }

    /**
     * store the new admin in DB
     */
    public function store(RegisterRequest $request)
    {
        $credentials = $request->only('name', 'email', 'password');
        User::create(
            [
                'name' => $credentials['name'],
                'email' => $credentials['email'],
                'password' => Hash::make($credentials['password'])
            ]
        );

        return redirect()->route('cookmates.home')->with('add-admin-success', 'Account created successfully!');
    }

    /**
     * return the login page
     */
    public function login()
    {
        return view('authenticate.login');
    }

    /**
     * handel the login instructions
    */
    public function authenticate(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            request()->session()->regenerate();
            return redirect()->route('cookmates.home')->with('login-success', 'Logged in successfully');
        }

        return redirect()->route('cookmates.login')->withInput()->with('login-failed', 'Invalid Email Or Password');
    }

    /**
     * return the logout page
     */
    public function logoutPage()
    {
        return view('recipes.logout');
    }

    /**
     * handle the logout instructions
     */
    public function logout()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('cookmates.login')->with('logout-success', 'Logged out successfully');
    }
}
