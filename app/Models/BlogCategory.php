<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model {
    protected $table = 'blog_categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'slug'
    ];
}
