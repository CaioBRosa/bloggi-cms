<?php

namespace App\Controllers;

class CMS extends BaseController
{
    public function index()
    {
        $data = [
            "title"=> "DASHBOARD",
        ];

        return view('pages/cms/home', $data);
    }

    public function posts()
    {
        $data = [
            "title"=> "Posts",
        ];

        return view('pages/cms/posts', $data);
    }

    public function categories()
    {
        $data = [
            "title"=> "Categories",
        ];

        return view('pages/cms/categories', $data);
    }

    public function comments()
    {
        $data = [
            "title"=> "comments",
        ];

        return view('pages/cms/comments', $data);
    }

    public function website()
    {
        $data = [
            "title"=> "website",
        ];

        return view('pages/cms/website', $data);
    }

    public function settings()
    {
        $data = [
            "title"=> "settings",
        ];

        return view('pages/cms/settings', $data);
    }
}
