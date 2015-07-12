<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];

    public function scopePublished($query){
        $query->where('published_at','<=', Carbon::now());
    }

    public function scopeUnPublished($query){
        $query->where('published_at','>',Carbon::now());
    }
}
