<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgeGroup extends Model {
    protected $table = 'age_groups';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'slug'
    ];

    public function products() {
        return $this->belongsToMany(Product::class, 'products_age_groups', 'age_group_id', 'product_id');
    }
}
