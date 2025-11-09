<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    //
    use HasFactory;

    protected $table = 'product_tag';

    protected $fillable = [
        'product_id',
        'tag_id',
    ];

    // Relationship to Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    // Relationship to Tag
    public function tag()
    {
        return $this->belongsTo(Tag::class, 'tag_id');
    }
}
