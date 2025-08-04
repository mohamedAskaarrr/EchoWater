<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Authentication routes
Route::get('/login', function () {
    return view('auth.premium-login');
})->name('login')->middleware('guest');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/signup', function () {
    return view('auth.premium-signup');
})->name('signup')->middleware('guest');

Route::post('/signup', [AuthController::class, 'signup'])->name('signup.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Static pages
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
