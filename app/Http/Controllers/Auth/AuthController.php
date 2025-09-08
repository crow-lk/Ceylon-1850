<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    /**
     * Show the login form
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle login request
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', 'Welcome back!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Show the registration form
     */
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    /**
     * Handle registration request
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Password::defaults()],
            'mobile_number' => 'required|string|max:20',
            'nationality' => 'required|string|max:100',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'mobile_number' => $validated['mobile_number'],
            'nationality' => $validated['nationality'],
            'role' => 'user', // Default role as specified
        ]);

        Auth::login($user);

        return redirect('/')->with('success', 'Registration successful! Welcome to Ceylon 1850!');
    }

    /**
     * Handle logout request
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been logged out successfully.');
    }

    /**
     * Redirect to social provider (placeholder for future implementation)
     */
    public function redirectToProvider($provider)
    {
        // This is a placeholder for social login implementation
        // You'll need to install Laravel Socialite and configure providers
        return redirect()->route('login')->with('info', 'Social login will be implemented soon!');
    }

    /**
     * Handle social provider callback (placeholder for future implementation)
     */
    public function handleProviderCallback($provider)
    {
        // This is a placeholder for social login implementation
        // You'll need to install Laravel Socialite and configure providers
        return redirect()->route('login')->with('info', 'Social login will be implemented soon!');
    }
}
