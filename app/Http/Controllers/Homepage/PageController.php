<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;

class PageController extends Controller {
    public function index() {
        $data['slide'] = TRUE;
        return view('home.index', $data);
    }

    public function show($slug) {
        if (!view()->exists("home.$slug")) {
            abort(404);
        }
        return view("home.$slug");
    }
}
