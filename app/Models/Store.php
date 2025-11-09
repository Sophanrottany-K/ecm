<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'store_name',
        'owner_id',
        'contact_email',
        'contact_phone',
        'Status',

    ];
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'store_id');
    }
}
