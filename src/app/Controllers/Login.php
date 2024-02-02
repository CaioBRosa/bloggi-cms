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

    /*public function insert(): string
    {
        $data = [
            'users_name' => 'teste',
            'users_email'=> 'teste@teste.dev',
            'users_password'=> password_hash('123456', PASSWORD_DEFAULT),
        ] ;

      (new UsersModel())->save($data);
    }*/

    public function login()
    {
        $validated = $this->validate([
            'email' => 'required|valid_email',
            'password' => 'required',
        ],[
            'email'=> [
                'required' => 'E-mail obrigatorio',
                'valid_email' => 'E-mail nao valido',
            ],
            'password'=> [
                'required'=> 'Senha obrigatorio',
            ]
        ]);

        if (!$validated) {
            return redirect()->route('login')->with('errors', $this->validator->getErrors());
        } else {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
        }

        $usersModel = new UsersModel();

        $user = $usersModel->getByEmail($email);
        if (!$user) {
            return redirect()->route('login')->with('message', 'E-mail ou senha incorretos');
        } else {
            $hashUserPassword = $user['users_password'];
            if (!password_verify($password, $hashUserPassword)) {
                return redirect()->route('login')->with('message', 'E-mail ou senha incorretos');
            } else {
                unset($user['users_password']);
                session()->set('isLoggedIn', true);
                session()->set('nome', $user['users_name']);
                return redirect()->route('app/dashboard');
            }
        }
    }

    public function logout()
    {
        return redirect()->to(base_url('login'));
    }
}