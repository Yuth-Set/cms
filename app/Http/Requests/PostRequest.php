<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request {
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'title'   => 'required',
            'slug'    => 'required|unique:slug',
            'content' => 'required',
            'status'  => 'required'
        ];
    }
}
