<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Get dashboard metrics
     */
    public function getDashboardMetrics()
    {
        // Sample real-time data - replace with actual sensor data
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
        // Sample product filtering - replace with database queries
        $products = [
            [
                'id' => 1,
                'name' => 'EchoMax Pro',
                'category' => 'Under-sink Systems',
                'price' => 599.99,
                'rating' => 4.8,
                'image' => '/images/echomax-pro.jpg'
            ],
            [
                'id' => 2,
                'name' => 'AquaFlow Elite',
                'category' => 'Countertop Purifiers',
                'price' => 299.99,
                'rating' => 4.6,
                'image' => '/images/aquaflow-elite.jpg'
            ],
            [
                'id' => 3,
                'name' => 'PureHouse Complete',
                'category' => 'Whole-house Solutions',
                'price' => 1299.99,
                'rating' => 4.9,
                'image' => '/images/purehouse-complete.jpg'
            ]
        ];

        // Apply filters
        if ($request->filled('category')) {
            $products = array_filter($products, function($product) use ($request) {
                return $product['category'] === $request->category;
            });
        }

        if ($request->filled('search')) {
            $search = strtolower($request->search);
            $products = array_filter($products, function($product) use ($search) {
                return str_contains(strtolower($product['name']), $search);
            });
        }

        if ($request->filled('rating')) {
            $minRating = (float) $request->rating;
            $products = array_filter($products, function($product) use ($minRating) {
                return $product['rating'] >= $minRating;
            });
        }

        return response()->json(array_values($products));
    }

    /**
     * Update device settings
     */
    public function updateDeviceSettings(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'device_id' => 'required|string',
            'settings' => 'required|array'
        ]);

        // Here you would typically update the device settings in your database
        // For now, we'll just return a success response

        return response()->json([
            'success' => true,
            'message' => 'Device settings updated successfully',
            'device_id' => $validated['device_id'],
            'updated_at' => now()->toISOString()
        ]);
    }

    /**
     * Get water quality history
     */
    public function getWaterQualityHistory(Request $request)
    {
        $days = $request->get('days', 7);
        
        // Sample historical data - replace with database queries
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
