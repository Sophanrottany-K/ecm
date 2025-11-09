<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'user_id',

        // add other fields as needed
    ];

    // Relationship to User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relationship to CartItems
    public function items()
    {
        return $this->hasMany(CartItem::class, 'cart_id');
    }
}
