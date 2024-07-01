<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model {
    protected $table = 'blog_tags';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'slug'
    ];

    public function blogs() {
        return $this->belongsToMany(Blog::class, 'blog_tags_blogs', 'blog_tag_id', 'blog_id');
    }
}
