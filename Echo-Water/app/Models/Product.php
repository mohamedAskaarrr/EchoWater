<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'category',
        'stock',
        'rating',
        'image',
        'features',
        'specifications',
        'status'
    ];

    protected $casts = [
        'features' => 'array',
        'specifications' => 'array',
        'price' => 'decimal:2',
        'rating' => 'decimal:1'
    ];

    /**
     * Get orders for this product
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    /**
     * Scope to get only active products
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}
