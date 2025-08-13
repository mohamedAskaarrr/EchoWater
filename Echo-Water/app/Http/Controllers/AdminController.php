<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Check if user is admin - simple role checking
     */
    private function checkAdminRole()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login first');
        }

        $user = Auth::user();
        if (!$user->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'Access denied. Admin privileges required.');
        }

        return null; // No redirect needed, user is admin
    }

    /**
     * Display admin dashboard
     */
    public function index()
    {
        $redirect = $this->checkAdminRole();
        if ($redirect) return $redirect;

        $stats = [
            'total_users' => User::count(),
            'total_orders' => Order::count(),
            'monthly_revenue' => Order::whereMonth('created_at', now()->month)->sum('total_amount'),
            'active_devices' => 890 // This would come from IoT data integration
        ];

        $recentOrders = Order::with(['user', 'product'])
                            ->latest()
                            ->limit(5)
                            ->get();

        return view('admin.dashboard', compact('stats', 'recentOrders'));
    }

    /**
     * Display users management
     */
    public function users()
    {
        $redirect = $this->checkAdminRole();
        if ($redirect) return $redirect;

        $users = User::latest()->get();

        return view('admin.users', compact('users'));
    }

    /**
     * Display orders management
     */
    public function orders()
    {
        $orders = Order::with(['user', 'product'])
                      ->latest()
                      ->get();

        return view('admin.orders', compact('orders'));
    }

    /**
     * Display products management
     */
    public function products()
    {
        $products = Product::active()->latest()->get();

        return view('admin.products', compact('products'));
    }

    /**
     * Update order status
     */
    public function updateOrderStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update(['status' => $request->status]);

        return redirect()->route('admin.orders')->with('success', 'Order status updated successfully!');
    }

    /**
     * Delete user
     */
    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users')->with('success', 'User deleted successfully!');
    }
}
