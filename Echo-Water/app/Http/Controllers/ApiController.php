<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Get dashboard metrics (placeholder for IoT integration)
     */
    public function getDashboardMetrics()
    {
        $metrics = [
            'tds_level' => rand(40, 50),
            'ph_level' => round(rand(70, 74) / 10, 1),
            'filter_health' => rand(80, 90),
            'daily_usage' => rand(45, 55),
            'timestamp' => now()->toISOString()
        ];

        return response()->json($metrics);
    }

    /**
     * Get filtered products
     */
    public function getProducts(Request $request)
    {
        $query = Product::active();

        // Apply filters
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('rating')) {
            $query->where('rating', '>=', $request->rating);
        }

        $products = $query->get();

        return response()->json($products);
    }

    /**
     * Update device settings (placeholder for IoT integration)
     */
    public function updateDeviceSettings(Request $request)
    {
        $validated = $request->validate([
            'device_id' => 'required|string',
            'settings' => 'required|array'
        ]);

        // TODO: Update device settings in database or send to IoT platform

        return response()->json([
            'success' => true,
            'message' => 'Device settings updated successfully',
            'device_id' => $validated['device_id'],
            'updated_at' => now()->toISOString()
        ]);
    }

    /**
     * Get water quality history (placeholder for IoT integration)
     */
    public function getWaterQualityHistory(Request $request)
    {
        $days = $request->get('days', 7);
        
        // TODO: Replace with actual database queries
        $history = [];
        for ($i = $days; $i >= 0; $i--) {
            $history[] = [
                'date' => now()->subDays($i)->format('Y-m-d'),
                'tds' => rand(40, 50),
                'ph' => round(rand(70, 74) / 10, 1),
                'chlorine' => round(rand(1, 5) / 100, 3),
                'usage' => rand(40, 60)
            ];
        }

        return response()->json($history);
    }
}
