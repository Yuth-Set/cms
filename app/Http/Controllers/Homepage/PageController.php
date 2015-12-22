<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use App\Page;
use App\Post;

class PageController extends Controller {
    public function index() {
        $data['posts'] = Post::paginate('4');
        return view('home.index', $data);
    }

    public function show($slug) {
        $data['page'] = Page::getPage($slug);
        $data['layout'] = 'layout-2';
        $data['posts'] = Page::getPosts($slug);

        $data['section'] = (object) [
            'title'    => 'Main Section',
            'subtitle' => 'List all post in a section',
            'content'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie.'
        ];

        return view("home.page", $data);
    }
}
