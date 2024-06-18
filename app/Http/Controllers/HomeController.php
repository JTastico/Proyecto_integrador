<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Check if the user is already authenticated
        if (Auth::check()) {
            // If the user is authenticated, redirect them to the dashboard
            return redirect()->route('dashboard');
        } else {
            // If the user is not authenticated, show the login form
            return view('auth.login');
        }
    }

    public function login(Request $request)
    {
        // Validate the login credentials
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to log the user in
        if (Auth::attempt($request->only('email', 'password'))) {
            // If the user is authenticated, redirect them to the dashboard
            return redirect()->route('dashboard');
        } else {
            // If the login credentials are invalid, redirect the user back to the login form with an error message
            return redirect()->back()->withErrors([
                'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
            ]);
        }
    }

    public function logout()
    {
        // Log the user out
        Auth::logout();

        // Redirect the user to the home page
        return redirect()->route('home');
    }

    public function register(Request $request)
    {
        // Validate the registration credentials
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Create a new user in the database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Authenticate the newly created user
        Auth::login($user);

        // Redirect the user to the dashboard
        return redirect()->route('dashboard');
    }
}
    
        


