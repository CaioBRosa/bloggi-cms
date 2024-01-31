<?php

namespace App\Controllers;

class CMS extends BaseController
{
    public function index(): string
    {
        return view('pages/cms/home');
    }
}
