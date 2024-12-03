<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Wishlist extends Model {
    use HasFactory;

    protected $fillable = ['user_id'];

    public function products(): BelongsToMany {
        return $this->belongsToMany(Product::class, 'wishlist_products', 'wishlist_id', 'product_id');
    }

    public function wishlist_products(): HasMany {
        return $this->hasMany(WishlistProduct::class, 'wishlist_id', 'id');
    }
}
