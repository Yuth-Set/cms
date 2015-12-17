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
}
