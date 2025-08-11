<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

// Welcome/Landing page
Route::get('/', function () {
    return view('home_modern'); // Use modern home view
});

// Authentication routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Home page
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Public product routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// Protected routes (require authentication)
Route::middleware(['auth'])->group(function () {
    // Dashboard (for authenticated users)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Dashboard actions
    Route::post('/dashboard/export-report', [DashboardController::class, 'exportReport'])->name('dashboard.export');
    Route::post('/dashboard/system-check', [DashboardController::class, 'runSystemCheck'])->name('dashboard.system-check');
    Route::post('/dashboard/schedule-maintenance', [DashboardController::class, 'scheduleMaintenance'])->name('dashboard.maintenance');
});

// Admin routes (require admin role)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    
    // User management
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::delete('/users/{id}', [AdminController::class, 'deleteUser'])->name('users.delete');
    
    // Order management
    Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
    Route::patch('/orders/{id}/status', [AdminController::class, 'updateOrderStatus'])->name('orders.update-status');
    
    // Product management
    Route::get('/products', [AdminController::class, 'products'])->name('products');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.delete');
});

// Helper function for CSRF token (since we're using plain PHP views)
if (!function_exists('csrf_token')) {
    function csrf_token() {
        return session()->token();
    }
}
