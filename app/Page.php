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

    public static function listOn() {
        return Page::where('status', 1)->orderBy('order', 'asc')->lists('title', 'slug');
    }

    public static function listOff() {
        return Page::where('status', 0)->orderBy('order', 'asc')->lists('title', 'slug');
    }
}
