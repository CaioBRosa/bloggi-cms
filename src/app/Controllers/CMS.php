<?php

namespace App\Controllers;

class CMS extends BaseController
{
    public function index(): string
    {
        $data = [
            "title"=> "DASHBOARD",
        ];

        return view('pages/cms/home', $data);
    }
}
