<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    /**
     * Handle user login
     */
    public function login(Request $request)
    {
        try {
            // Validate the incoming request
            $credentials = $request->validate([
                'email' => 'required|email|max:255',
                'password' => 'required|string|min:6',
            ]);

            // Rate limiting could be added here in production
            // Remember me functionality
            $remember = $request->filled('remember');

            // Attempt to authenticate the user
            if (Auth::attempt($credentials, $remember)) {
                // Regenerate session to prevent session fixation
                $request->session()->regenerate();
                
                Log::info('User logged in successfully', ['email' => $credentials['email']]);
                
                // Redirect to intended page or dashboard
                return redirect()->intended(route('welcome'))->with('success', 'Welcome back, ' . Auth::user()->name . '!');
            }

            // Authentication failed
            Log::warning('Failed login attempt', ['email' => $credentials['email']]);
            
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->withInput($request->only('email'))->with('error', 'Invalid login credentials. Please try again.');

        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput()->with('error', 'Please check your input and try again.');
        } catch (\Exception $e) {
            Log::error('Login error: ' . $e->getMessage());
            return back()->with('error', 'An unexpected error occurred. Please try again later.');
        }
    }

    /**
     * Handle user registration
     */
    public function signup(Request $request)
    {
        try {
            // Validate the incoming request
            $validated = $request->validate([
                'name' => 'required|string|max:255|min:2',
                'email' => 'required|string|email|max:255|unique:users,email',
                'password' => [
                    'required', 
                    'confirmed', 
                    Password::min(8)
                        ->letters()
                        ->mixedCase()
                        ->numbers()
                        ->symbols()
                        ->uncompromised()
                ],
                'terms' => 'required|accepted',
            ], [
                'name.required' => 'Please enter your full name.',
                'name.min' => 'Name must be at least 2 characters long.',
                'email.required' => 'Please enter your email address.',
                'email.email' => 'Please enter a valid email address.',
                'email.unique' => 'This email address is already registered. Please use a different email or try logging in.',
                'password.required' => 'Please enter a password.',
                'password.confirmed' => 'Password confirmation does not match.',
                'terms.accepted' => 'You must accept the terms and conditions to register.',
            ]);

            // Create the user
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'email_verified_at' => now(), // Auto-verify for demo purposes
            ]);

            Log::info('New user registered', ['email' => $validated['email'], 'name' => $validated['name']]);

            // Log the user in immediately
            Auth::login($user);

            // Regenerate session for security
            $request->session()->regenerate();

            return redirect()->route('profile')->with('success', 'Welcome to EchoWater, ' . $user->name . '! Your account has been created successfully.');

        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput()->with('error', 'Please correct the errors below and try again.');
        } catch (\Exception $e) {
            Log::error('Registration error: ' . $e->getMessage());
            return back()->with('error', 'An unexpected error occurred during registration. Please try again later.');
        }
    }

    /**
     * Handle user logout
     */
    public function logout(Request $request)
    {
        try {
            $userName = Auth::user()->name ?? 'User';
            
            Log::info('User logged out', ['email' => Auth::user()->email ?? 'unknown']);

            // Logout the user
            Auth::logout();

            // Invalidate the session
            $request->session()->invalidate();

            // Regenerate CSRF token
            $request->session()->regenerateToken();

            return redirect()->route('welcome')->with('success', 'Goodbye, ' . $userName . '! You have been logged out successfully.');

        } catch (\Exception $e) {
            Log::error('Logout error: ' . $e->getMessage());
            return redirect()->route('welcome')->with('error', 'An error occurred during logout.');
        }
    }

    /**
     * Show the login form
     */
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('welcome');
        }
        
        return view('auth.premium-login');
    }

    /**
     * Show the registration form
     */
    public function showSignupForm()
    {
        if (Auth::check()) {
            return redirect()->route('welcome');
        }
        
        return view('auth.premium-signup');
    }
} 