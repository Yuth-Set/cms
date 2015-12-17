<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
    public function __construct() {
    }

    public function index() {
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        //
    }

    public function show(Post $post) {
        return $post;
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
