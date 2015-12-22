<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller {
    public function show($slug) {
        $post = Post::postOn($slug);
        if (count($post) < 1) {
            abort(404);
        }
        $data['post'] = $post;
        return view('home.post', $data);
    }
}
