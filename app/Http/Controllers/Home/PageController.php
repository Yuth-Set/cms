<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller {
    public function __construct() {
        $this->data['menus'] = Page::listOn();
        $this->data['slide'] = FALSE;
    }

    public function index() {
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
