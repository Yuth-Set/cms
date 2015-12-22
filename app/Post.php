<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    const POSTS_PER_PAGE = 4;
    protected $fillable = [
        'slug',
        'title',
        'content',
        'status',
        'user_id',
        'page_id'
    ];

    public static function postOn($slug) {
        return Post::where(['slug' => $slug, 'status' => 1])->first();
    }

    public static function postOff($slug) {
        return Post::where(['slug' => $slug, 'status' => 0])->first();
    }

    public function page() {
        return $this->belongsTo('App\Page');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    /* helper functions */
    public static function getPosts() {
        return self::paginate(self::POSTS_PER_PAGE);
    }
}
