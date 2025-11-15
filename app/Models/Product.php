<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_id';
    use HasFactory;
    protected $fillable = [
        'store_id',
        'category_id',
        'color_id',
        'size_id',
        'name',
        'description',
        'price',
        'stock',
        'status',
        'image', // added for product image
    ];

    // Relationships
    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }

    public function size()
    {
        return $this->belongsTo(Size::class, 'size_id');
    }


    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }
}
