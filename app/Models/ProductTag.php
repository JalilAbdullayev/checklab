<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    protected $table = 'product_tags';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'slug'
    ];

    public function products() {
        return $this->belongsToMany(Product::class, 'product_tags_products', 'product_tag_id', 'product_id');
    }
}
