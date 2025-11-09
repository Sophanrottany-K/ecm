<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'payment_id',
        'order_id',
        'type',
        'method',
        'reference_number',
        'amount',
        'status',
    ];
    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id');
    }
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
