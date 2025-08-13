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
        $products = Product::active()
                          ->latest()
                          ->get();

        return view('products_modern', compact('products'));
    }

    /**
     * Display a specific product
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.detail', compact('product'));
    }

    /**
     * Store a new product (Admin only)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string',
            'stock' => 'required|integer|min:0',
            'features' => 'nullable|string',
        ]);

        $validated['features'] = $request->features ? explode(',', $request->features) : [];
        $validated['status'] = 'active';

        Product::create($validated);

        return redirect()->route('admin.products')
                        ->with('success', 'Product created successfully!');
    }

    /**
     * Update a product (Admin only)
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string',
            'stock' => 'required|integer|min:0',
            'features' => 'nullable|string',
        ]);

        if ($request->features) {
            $validated['features'] = explode(',', $request->features);
        }

        $product->update($validated);

        return redirect()->route('admin.products')
                        ->with('success', 'Product updated successfully!');
    }

    /**
     * Delete a product (Admin only)
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->update(['status' => 'inactive']);

        return redirect()->route('admin.products')
                        ->with('success', 'Product deleted successfully!');
    }
}
