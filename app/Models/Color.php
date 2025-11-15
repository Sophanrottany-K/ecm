<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $primaryKey = 'color_id';

    protected $fillable = [
        'name',
        'code'
    ];
    public function products()
    {
        return $this->hasMany(Product::class, 'color_id', 'color_id');
    }
}
