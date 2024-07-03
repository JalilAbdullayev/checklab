<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model {
    protected $table = 'product_categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'slug',
        'icon'
    ];

    public function products() {
        return $this->belongsToMany(Product::class, 'product_categories_products', 'product_category_id', 'product_id');
    }
}
