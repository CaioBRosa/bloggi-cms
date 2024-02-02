<?php

namespace App\Controllers;
use App\Models\PostModel;

class Blog extends BaseController
{
    public function index(): string
    {
        $postModel = new PostModel();

        $postsPaginados = $postModel->getPosts()->paginate(10);

        $data = [
            "title"=> "Inicio",
            "post"=> $postsPaginados,
            "pager"=> $postModel->pager,
        ];

        return view('pages/blog/home', $data);
    }

    public function search(): string
    {
        $postModel = new PostModel();
        $termoPesquisa = $this->request->getGet('query');

        $data = [
            "title"=> "Inicio",
            "termoPesquisa"=> $postModel->pesquisarNoBanco($termoPesquisa),
            "post"=> $postModel->getPosts(),
        ];

        return view('pages/blog/search', $data);
    }

    public function post($id): string
    {
        $postModel = new PostModel();

        $data = [
            "title"=> "Post",
            "post"=> $postModel->find($id),
        ];

        return view('pages/blog/post', $data);
    }

    public function sobre(): string
    {

        $postModel = new PostModel();

        $data = [
            "title"=> "sobre",
            "post"=> $postModel->findAll(),
        ];

        return view('pages/blog/sobre', $data);
    }

    public function contato(): string
    {

        $postModel = new PostModel();

        $data = [
            "title"=> "contato",
            "post"=> $postModel->findAll(),
        ];


        return view('pages/blog/contato', $data);
    }
}
