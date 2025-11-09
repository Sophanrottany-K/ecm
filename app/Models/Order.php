<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'user_id',
        'store_id',
        'shipping_address',
        'status',

    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }
    public function details()
    {
        return $this->hasMany(OrderDetail::class, 'order_id');
    }
    public function payments()
    {
        return $this->hasMany(Payment::class, 'order_id');
    }
    public function shipments()
    {
        return $this->hasMany(Shipping::class, 'order_id');
    }
}
