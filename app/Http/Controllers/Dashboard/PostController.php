<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Page;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
    public function index() {
        if (\Request::ajax()) {
            return Post::all();
        }
        return view('post.index');
    }

    public function create() {
        $data['pages'] = Page::where('status', 1)->lists('title', 'id');
        return view('post.create', $data);
    }

    public function store(PostRequest $request) {
        Post::create($request->all());
        return redirect('dash/post')->with('message', 'Post was create success.');
    }

    public function show(Post $post) {
        $data['post'] = $post;
        return view('post.detail', $data);
    }

    public function edit(Post $post) {
        $data['pages'] = Page::where('status', 1)->lists('title', 'id');
        $data['post'] = $post;
        return view('post.update', $data);
    }

    public function update(PostRequest $request, Post $post) {
        $post->update($request->except(['_token']));
        return redirect('dash/post')->with('message', 'Post was update success.');
    }

    public function destroy(Post $post) {
        if (\Request::has('id')) {
            Post::destroy(\Request::input('id'));
            return ['result' => true];
        }
        $post->delete();
        return redirect('dash/post')->with('message', 'Post was delete success.');
    }
}
