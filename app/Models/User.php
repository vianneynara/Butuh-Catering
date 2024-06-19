<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'password',
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'address',
        'date_of_birth',
        'usertype',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * One to one relation to shops.
     */
    public function shops(): HasOne
    {
        return $this->hasOne(Shop::class);
    }

    /**
     * One to many relation to reports.
     */
    public function reports(): HasMany
    {
        return $this->hasMany(Report::class);
    }

    /**
     * One to many relation to cart_items.
     */
    public function cart_items(): HasMany
    {
        return $this->hasMany(CartItem::class);
    }

    /**
     * One to many relation to chats.
     */
    public function chats(): HasMany
    {
        return $this->hasMany(Chat::class);
    }

    /**
     * One to many relation to orders.
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    /**
     * One to many relation to reviews.
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
