<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller {
    public function index() {
        if (\Request::ajax()) {
            return User::all();
        }
        return view('user.index');
    }

    public function create() {
        $data['types'] = User::lists('type', 'type');
        return view('user.create', $data);
    }

    public function store(UserRequest $request) {
        User::create($request->except(['_token']));
        return redirect('dash/user')->with('message', 'User was create success.');
    }

    public function show($id) {
        //
    }

    public function edit(User $user) {
        $data['user'] = $user;
        $data['types'] = User::lists('type', 'type');
        switch (User::where('id', $user)->pluck('type')) {
            case 'admin':
                $data['type'] = 'admin';
                break;
            case 'user':
                $data['type'] = 'user';
                break;
        }
        return view('user.update', $data);
    }

    public function update(Request $request, Page $page) {
        $user->update($request->except(['_token']));
        return redirect('dash/page')->with('message', 'Page was update success.');
    }

    public function destroy(User $user) {
        if(\Request::has('id')) {
            User::destroy(\Request::input('id');
            return ['result' => true];
        }
        $user->delete();
        return redirect('dash/page')->with('message', 'Page was deleted success.');
    }
}
