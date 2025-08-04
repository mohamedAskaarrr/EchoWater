<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Authentication routes
Route::middleware('guest')->group(function () {
    // Login routes
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    
    // Registration routes
    Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
    Route::post('/signup', [AuthController::class, 'signup'])->name('signup.post');
});

// Logout route (requires authentication)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Protected routes (require authentication)
Route::middleware('auth')->group(function () {
    Route::get('/profile', function () {
        return view('profile.index');
    })->name('profile');
    
    // Add more protected routes here as needed
});

// Public routes
Route::get('/shop', function () {
    return view('shop.premium');
})->name('shop');

Route::get('/feedback', function () {
    return view('feedback.premium');
})->name('feedback');

Route::post('/feedback', function () {
    // Simple validation
    request()->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:1000',
        'rating' => 'nullable|integer|min:1|max:5'
    ]);

    // Here you would typically save the feedback to the database
    // and/or send an email notification
    
    return redirect()->route('feedback')->with('success', 'Thank you for your feedback! We appreciate your input.');
})->name('feedback.store');
