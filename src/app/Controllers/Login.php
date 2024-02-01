<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Login extends BaseController
{
    public function index(): string
    {
        $data = [
            "title"=> "Login",
        ];

        return view('pages/login', $data);
    }

    //public function insert(): string
    //{
    //    $data = [
    //        'users_name' => 'teste',
    //        'users_email'=> 'teste@teste.dev',
    //        'users_password'=> password_hash('123456', PASSWORD_DEFAULT),
    //    ] ;

    //   (new UsersModel())->save($data);
    //}

    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $usersModel = new UsersModel();

        $dataUser = $usersModel->getByEmail($email);

        if (count($dataUser) > 0) {
            $hashUser = $dataUser['users_password'];
            if (password_verify($password, $hashUser)) {
                session()->set('isLoggedIn', true);
                session()->set('nome', $dataUser['users_name']);
                return redirect()->to(base_url('/app/dashboard'));
            } else {
                session()->setFlashData('msg', 'E-mail ou Senha incorretos');
                return redirect()->to(base_url('login'));
            }
        } else {
            session()->setFlashData('msg', 'E-mail ou Senha incorretos');
			return redirect()->to(base_url('login'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}