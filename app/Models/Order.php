<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $primaryKey = 'order_id';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'invoice_id',
        'order_date',
        'order_address',
        'status',
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
     * One to one relation to order_items.
     */
    public function order_items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}
