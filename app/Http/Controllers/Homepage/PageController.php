<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use App\Page;

class PageController extends Controller {
    public function index() {
        $data['slide'] = TRUE;
        return view('home.index', $data);
    }

    public function show($slug) {
        $data['page'] = Page::getPage($slug);
        $data['posts'] = Page::getPosts($slug);
        return view("home.page", $data);
    }
}
