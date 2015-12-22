<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use App\Page;
use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller {
    public function __construct() {
        $this->data['menus'] = Page::listOn();
        $this->data['slide'] = FALSE;
    }

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

        // return view("home.page", $data);
        $this->data['slide'] = TRUE;
        return view('home.index', $this->data);
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        //
    }

    public function show($name) {
        return view("home.$name", $this->data);
    }

    public function edit($id) {
        //
    }

    public function update(Request $request, $id) {
        //
    }

    public function destroy($id) {
        //
    }
}
