<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use willvincent\Rateable\Rateable;

class Product extends Model {
    use Rateable;

    protected $table = 'products';
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

    public function tags(): BelongsToMany {
        return $this->belongsToMany(ProductTag::class, 'product_tags_products', 'product_id', 'product_tag_id')
            ->withTimestamps();
    }

    public function categories(): BelongsToMany {
        return $this->belongsToMany(ProductCategory::class, 'product_categories_products', 'product_id', 'product_category_id')
            ->withTimestamps();
    }

    public function ages(): BelongsToMany {
        return $this->belongsToMany(AgeGroup::class, 'products_age_groups', 'product_id', 'age_group_id')->withTimestamps();
    }
}
