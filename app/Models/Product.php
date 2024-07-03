<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'slug',
        'brand',
        'form',
        'color',
        'quantity',
        'price',
        'discount',
        'description',
        'text',
        'image',
    ];

    public function tags() {
        return $this->belongsToMany(ProductTag::class, 'product_tags_products', 'product_id', 'product_tag_id')
            ->withTimestamps();
    }

    public function categories() {
        return $this->belongsToMany(ProductCategory::class, 'product_categories_products', 'product_id', 'product_category_id')
            ->withTimestamps();
    }
}
