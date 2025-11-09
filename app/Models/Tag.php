<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'name',
        // add other fields if needed
    ];

    // Relationship to products (many-to-many)
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_tag', 'tag_id', 'product_id');
    }
}
