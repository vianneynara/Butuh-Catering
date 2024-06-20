<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Report extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $primaryKey = 'report_id';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'status',
        'context_type',
        'context_id',
        'report_details',
        'user_id'
    ];

    /**
     * One to one relation to users.
     */
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
