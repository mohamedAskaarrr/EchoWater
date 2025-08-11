<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'total_amount',
        'status',
        'shipping_address',
        'customer_name',
        'customer_email'
    ];

    protected $casts = [
        'total_amount' => 'decimal:2',
        'shipping_address' => 'array'
    ];

    /**
     * Get the user who made this order
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the product for this order
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
