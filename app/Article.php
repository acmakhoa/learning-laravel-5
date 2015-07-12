<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
        'published_at',
        'user_id'
    ];

    public function scopePublished($query){
        $query->where('published_at','<=', Carbon::now());
    }

    public function scopeUnPublished($query){
        $query->where('published_at','>',Carbon::now());
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function writer(){
       return $this->belongsTo('Blog\User');
    }
}
