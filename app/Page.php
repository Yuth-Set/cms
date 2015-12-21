<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {
    protected $fillable = [
        'slug',
        'title',
        'description',
        'image',
        'author',
        'layout'
    ];

    // related items
    public function posts() {
        return $this->hasMany('App\Post');
    }

    // helper functions
    public static function listOn() {
        return self::where('status', 1)->orderBy('order', 'asc')->lists('title', 'slug');
    }

    public static function listOff() {
        return self::where('status', 0)->orderBy('order', 'asc')->lists('title', 'slug');
    }

    public static function getPage($slug) {
        return self::where('slug', "page/$slug")->first();
    }

    public static function getPosts($slug, $status = 1) {
        return self::where(['slug' => "page/$slug", 'status' => $status])->first()->posts()->paginate(4);
    }

}
