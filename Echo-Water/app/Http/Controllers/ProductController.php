<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display all products
     */
    public function index()
    {
        // Get products from database
        $products = Product::where('status', 'active')
                          ->orderBy('created_at', 'desc')
                          ->get()
                          ->toArray();

        // If no products in database, use sample data
        if (empty($products)) {
            $products = [
                [
                    'id' => 1,
                    'name' => 'EchoMax Pro',
                    'category' => 'Under-sink Systems',
                    'price' => 599.99,
                    'rating' => 4.8,
                    'image' => '/images/echomax-pro.jpg',
                    'description' => '7-stage advanced filtration system with smart monitoring',
                    'features' => ['Smart IoT monitoring', '7-stage filtration', 'UV sterilization']
                ],
                [
                    'id' => 2,
                    'name' => 'AquaFlow Elite',
                    'category' => 'Countertop Purifiers',
                    'price' => 299.99,
                    'rating' => 4.6,
                    'image' => '/images/aquaflow-elite.jpg',
                    'description' => 'Compact countertop purifier with mineral retention',
                    'features' => ['Mineral retention', 'Compact design', 'Easy installation']
                ],
                [
                    'id' => 3,
                    'name' => 'PureHouse Complete',
                    'category' => 'Whole-house Solutions',
                    'price' => 1299.99,
                    'rating' => 4.9,
                    'image' => '/images/purehouse-complete.jpg',
                    'description' => 'Complete whole-house water treatment system',
                    'features' => ['Whole-house coverage', 'Multi-stage filtration', 'Professional installation']
                ]
            ];
        }

        $categories = [
            'Under-sink Systems',
            'Countertop Purifiers', 
            'Whole-house Solutions'
        ];

        return view('products_modern', compact('products'));
    }

    /**
     * Display a specific product
     */
    public function show($id)
    {
        // Try to get product from database
        $product = Product::find($id);
        
        if (!$product) {
            // Sample single product data if not found in database
            $product = [
                'id' => $id,
                'name' => 'EchoMax Pro',
                'category' => 'Under-sink Systems',
                'price' => 599.99,
                'rating' => 4.8,
                'image' => '/images/echomax-pro.jpg',
                'description' => '7-stage advanced filtration system with smart monitoring',
                'features' => ['Smart IoT monitoring', '7-stage filtration', 'UV sterilization'],
                'specifications' => [
                    'Flow Rate' => '2.5 GPM',
                    'Filter Life' => '12 months',
                    'Dimensions' => '14" x 5" x 16"',
                    'Warranty' => '3 years'
                ]
            ];
        } else {
            $product = $product->toArray();
        }

        return view('products.detail', compact('product'));
    }

    /**
     * Store a new product (Admin only)
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string',
            'stock' => 'required|integer|min:0',
        ]);

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
            'stock' => $request->stock,
            'rating' => 0,
            'features' => $request->features ? explode(',', $request->features) : [],
            'specifications' => [],
            'status' => 'active'
        ]);

        return redirect()->route('admin.products')->with('success', 'Product created successfully!');
    }

    /**
     * Update a product (Admin only)
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string',
            'stock' => 'required|integer|min:0',
        ]);

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
            'stock' => $request->stock,
            'features' => $request->features ? explode(',', $request->features) : $product->features,
        ]);

        return redirect()->route('admin.products')->with('success', 'Product updated successfully!');
    }

    /**
     * Delete a product (Admin only)
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->update(['status' => 'inactive']);

        return redirect()->route('admin.products')->with('success', 'Product deleted successfully!');
    }
}
