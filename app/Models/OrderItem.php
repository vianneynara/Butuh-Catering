<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    use HasFactory;

    protected $primaryKey = 'order_item_id';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'quantity',
        'notes',
        'product_id',
        'order_id'
    ];

    /**
     * One to one relation to products.
     */
    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    /**
     * One to one relation to orders.
     */
    public function orders(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
