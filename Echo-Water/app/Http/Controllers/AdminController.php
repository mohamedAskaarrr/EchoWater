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
        // Get real stats from database or use defaults
        $stats = [
            'total_users' => User::count() ?: 1250,
            'total_orders' => Order::count() ?: 340,
            'monthly_revenue' => Order::where('created_at', '>=', now()->startOfMonth())->sum('total_amount') ?: 45600,
            'active_devices' => 890 // This would come from IoT data
        ];

        // Get recent orders
        $recentOrders = Order::with(['user', 'product'])
                            ->latest()
                            ->limit(5)
                            ->get()
                            ->map(function ($order) {
                                return [
                                    'id' => $order->id,
                                    'customer' => $order->customer_name ?: ($order->user->name ?? 'Guest'),
                                    'product' => $order->product->name ?? 'Unknown Product',
                                    'amount' => $order->total_amount,
                                    'status' => $order->status
                                ];
                            })
                            ->toArray();

        // If no orders in database, use sample data
        if (empty($recentOrders)) {
            $recentOrders = [
                ['id' => 1, 'customer' => 'John Doe', 'product' => 'EchoMax Pro', 'amount' => 599.99, 'status' => 'completed'],
                ['id' => 2, 'customer' => 'Jane Smith', 'product' => 'AquaFlow Elite', 'amount' => 299.99, 'status' => 'pending'],
                ['id' => 3, 'customer' => 'Mike Johnson', 'product' => 'PureHouse Complete', 'amount' => 1299.99, 'status' => 'processing']
            ];
        }

        return view('admin.dashboard', compact('stats', 'recentOrders'));
    }

    /**
     * Display users management
     */
    public function users()
    {
        $redirect = $this->checkAdminRole();
        if ($redirect) return $redirect;

        $users = User::latest()->get()->map(function ($user) {
            return [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'created_at' => $user->created_at->format('Y-m-d')
            ];
        })->toArray();

        // If no users in database, use sample data
        if (empty($users)) {
            $users = [
                ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com', 'created_at' => '2024-01-15'],
                ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com', 'created_at' => '2024-01-20'],
                ['id' => 3, 'name' => 'Mike Johnson', 'email' => 'mike@example.com', 'created_at' => '2024-02-01']
            ];
        }

        return view('admin.users', compact('users'));
    }

    /**
     * Display orders management
     */
    public function orders()
    {
        $orders = Order::with(['user', 'product'])
                      ->latest()
                      ->get()
                      ->map(function ($order) {
                          return [
                              'id' => $order->id,
                              'customer' => $order->customer_name ?: ($order->user->name ?? 'Guest'),
                              'product' => $order->product->name ?? 'Unknown Product',
                              'amount' => $order->total_amount,
                              'status' => $order->status,
                              'date' => $order->created_at->format('Y-m-d')
                          ];
                      })
                      ->toArray();

        // If no orders in database, use sample data
        if (empty($orders)) {
            $orders = [
                ['id' => 1, 'customer' => 'John Doe', 'product' => 'EchoMax Pro', 'amount' => 599.99, 'status' => 'completed', 'date' => '2024-01-15'],
                ['id' => 2, 'customer' => 'Jane Smith', 'product' => 'AquaFlow Elite', 'amount' => 299.99, 'status' => 'pending', 'date' => '2024-01-20'],
                ['id' => 3, 'customer' => 'Mike Johnson', 'product' => 'PureHouse Complete', 'amount' => 1299.99, 'status' => 'processing', 'date' => '2024-02-01']
            ];
        }

        return view('admin.orders', compact('orders'));
    }

    /**
     * Display products management
     */
    public function products()
    {
        $products = Product::where('status', 'active')
                          ->latest()
                          ->get()
                          ->map(function ($product) {
                              return [
                                  'id' => $product->id,
                                  'name' => $product->name,
                                  'category' => $product->category,
                                  'price' => $product->price,
                                  'stock' => $product->stock
                              ];
                          })
                          ->toArray();

        // If no products in database, use sample data
        if (empty($products)) {
            $products = [
                ['id' => 1, 'name' => 'EchoMax Pro', 'category' => 'Under-sink Systems', 'price' => 599.99, 'stock' => 25],
                ['id' => 2, 'name' => 'AquaFlow Elite', 'category' => 'Countertop Purifiers', 'price' => 299.99, 'stock' => 40],
                ['id' => 3, 'name' => 'PureHouse Complete', 'category' => 'Whole-house Solutions', 'price' => 1299.99, 'stock' => 15]
            ];
        }

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
