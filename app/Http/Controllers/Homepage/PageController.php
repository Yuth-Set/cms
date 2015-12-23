<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use App\Page;
use App\Post;

class PageController extends Controller {
    public function index() {
        $data['posts'] = Post::getAll();
        return view('home.index', $data);
    }

    public function show($slug) {
        $data['page'] = Page::getBy($slug);
        $data['posts'] = Page::getPostBy($slug);

        $data['section'] = (object) [
            'title'    => 'Main Section',
            'subtitle' => 'List all post in a section',
            'content'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie.'
        ];

        $data['sidebar'] = (object) [
            'latest_posts'  => Post::getLatest(),
            'popular_posts' => Post::getPopular()
        ];

        return view("home.page", $data);
    }

}
