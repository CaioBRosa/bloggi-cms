<?php

namespace App\Controllers;

class Post extends BaseController
{

    public function index()
    {
        $data = [
            "title"=> "Posts",
        ];

        return view('pages/cms/posts', $data);
    }

    public function newPost() {
        $data = [
            "title"=> "New Post",
        ];

        return view('pages/cms/newPost', $data);
    }
}
