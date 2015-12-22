<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Input;

class UploadController extends Controller {
    public function file(Request $request) {
    }

    public function photo(Request $request) {
        $file = Input::file('image');
        $data['name'] = $file->getClientOriginalName();
        $data['path'] = base_path() . '\public\images';
        $data['slug'] = Str::slug($file->getClientOriginalName(), '_');
        $data['type'] = "image";
        Upload::create($data);
        $file->move($data['path'], $data['name']); //
        return back()->with('message', 'file saved!');
    }

    public function video() {
    }
}
