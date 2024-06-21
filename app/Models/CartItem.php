<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CartItem extends Model
{
    use HasFactory;

    protected $primaryKey = 'cart_item_id';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'quantity',
        'notes',
        'product_id',
        'user_id'
    ];

    /**
     * One to one relation to users.
     */
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * One to one relation to products.
     */
    public function products(): HasOne
    {
        return $this->hasOne(Product::class);
    }
}
