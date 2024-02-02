<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Login extends BaseController
{
    public function index(): string
    {
        // Verificar se o usuário está logado
        if (session()->has("isLoggedIn")) {
            header("Location: " . base_url('app/dashboard'));
            exit();
        } else {
            $data = [
                "title" => "Login",
            ];
    
            return view('pages/login', $data);
        }
    }

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

        $dataUser = $usersModel->getByEmail($email);

        if (count($dataUser) > 0) {
            $hashUser = $dataUser['users_password'];
            if (password_verify($password, $hashUser)) {
                session()->set('isLoggedIn', true);
                session()->set('nome', $dataUser['users_name']);
                return redirect()->to(base_url('app/dashboard'));
            }
        }

    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}