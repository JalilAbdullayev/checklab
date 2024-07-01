<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'slug',
        'description',
        'text',
        'image',
        'category_id'
    ];

    public function tags() {
        return $this->belongsToMany(BlogTag::class, 'blog_tags_blogs', 'blog_id', 'blog_tag_id')->withTimestamps();
    }

    public function category() {
        return $this->belongsTo(BlogCategory::class, 'category_id', 'id');
    }
}
