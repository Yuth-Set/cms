<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
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

    public function store(Request $request) {
        User::create($request->except(['_token']));
        return redirect('dash/user')->with('message', 'User was create success.');
    }

    public function show($id) {
        //
    }

    public function edit(User $user) {
        $data['user'] = $user;
        return view('user.update', $data);
    }

    public function update(Request $request, $id) {
        //
    }

    public function destroy($id) {
        //
    }
}
