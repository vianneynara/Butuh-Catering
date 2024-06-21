<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Review extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $primaryKey = 'review_id';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'rating',
        'details',
        'rating',
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
