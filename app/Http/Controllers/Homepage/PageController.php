<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use App\Page;
use App\Post;

class PageController extends Controller {
    public function index() {
        $data['posts'] = Post::getAll();
        $data['slides'] = [
            (object) ['src' => 'assets/img/gallery/slider-img-1.jpg', 'alt' => 'Slider', 'href' => 'gallery-single.htm', 'name' => 'test1'],
            (object) ['src' => 'assets/img/gallery/slider-img-1.jpg', 'alt' => 'Slider', 'href' => 'gallery-single.htm', 'name' => 'test1'],
            (object) ['src' => 'assets/img/gallery/slider-img-1.jpg', 'alt' => 'Slider', 'href' => 'gallery-single.htm', 'name' => 'test1'],
            (object) ['src' => 'assets/img/gallery/slider-img-1.jpg', 'alt' => 'Slider', 'href' => 'gallery-single.htm', 'name' => 'test1']
        ];
        $data['post'] = Post::getLatest()->first();
        return view('home.index', $data);
    }

    public function show($slug) {
        $data['page'] = Page::getBy($slug);

        $data['section1'] = (object) [
            'title'    => 'Main Section',
            'subtitle' => 'List all post in a section',
            'content'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie.',
            'posts'    => Page::getPostBy($slug)
        ];

        $data['section2'] = (object) [
            'title'    => 'Section Two',
            'subtitle' => 'Section Two Subtitle',
            'content'  => 'Section Two content'
        ];

        $data['section3'] = (object) [
            'title'    => 'Section Two',
            'subtitle' => 'Section Two Subtitle',
            'content'  => 'Section Two content'
        ];

        $data['sidebar'] = (object) [
            'latest_posts'  => Post::getLatest(),
            'popular_posts' => Post::getPopular()
        ];

        return view("home.page", $data);
    }

}
