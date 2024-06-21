<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chat extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $primaryKey = 'chat_id';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'message',
        'user_id',
        'shop_id'
    ];

    /**
     * One to one relation to users.
     */
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * One to one relation to shops.
     */
    public function shops(): BelongsTo
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }
}
