<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Page;

class PageController extends Controller {
    public function index() {
        if (\Request::ajax()) {
            return Page::all();
        }
        return view('page.index');
    }

    public function create() {
        return view('page.create');
    }

    public function store(PageRequest $request) {
        Page::create($request->except(['_token']));
        return redirect('dash/page')->with('message', 'Page was create success.');
    }

    public function show(Page $page) {
        $data['page'] = $page;
        return view('page.detail', $data);
    }

    public function edit(Page $page) {
        $data['page'] = $page;
        return view('page.update', $data);
    }

    public function update(PageRequest $request, Page $page) {
        $page->update($request->except(['_token']));
        return redirect('dash/page')->with('message', 'Page was update success.');
    }

    public function destroy(Page $page) {
        $page->delete();
        return redirect('dash/page')->with('message', 'Page was delete success.');
    }
}
